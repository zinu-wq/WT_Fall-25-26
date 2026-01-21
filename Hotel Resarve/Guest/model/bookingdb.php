<?php
class RoomModel {
    private $conn;

    public function __construct() {
        $this->conn = new mysqli("localhost", "root", "", "hotel_db");
        if($this->conn->connect_error){
            die("DB Connection Failed: " . $this->conn->connect_error);
        }
    }

    // Get all rooms
    public function getRooms() {
        $sql = "SELECT * FROM rooms";
        $res = $this->conn->query($sql);
        $rooms = [];
        if($res->num_rows > 0){
            while($row = $res->fetch_assoc()){
                $rooms[] = $row;
            }
        }
        return $rooms;
    }

    // Get all bookings
    public function getAllBookings() {
        $sql = "SELECT b.booking_id, r.room_type, b.checkin, b.checkout, b.preference, b.payment_method
                FROM bookings b 
                JOIN rooms r ON b.room_id = r.id
                ORDER BY b.created_at DESC";
        $res = $this->conn->query($sql);
        $all = [];
        if($res->num_rows > 0){
            while($row = $res->fetch_assoc()){
                $all[] = $row;
            }
        }
        return $all;
    }

    // next Booking ID
    public function getNextBookingId() {
        $prefix = "BK-";
        $sql = "SELECT MAX(id) AS max_id FROM bookings";
        $res = $this->conn->query($sql);
        $row = $res->fetch_assoc();
        return $prefix . str_pad(($row['max_id'] ?? 0) + 1, 3, "0", STR_PAD_LEFT);
    }

    // Book a room
    public function bookRoom($room_id, $checkin, $checkout, $preference, $payment) {
        // Check if room is already booked
        $sql = "SELECT * FROM bookings 
                WHERE room_id=? AND 
                ((checkin <= ? AND checkout >= ?) OR (checkin <= ? AND checkout >= ?))";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("issss", $room_id, $checkin, $checkin, $checkout, $checkout);
        $stmt->execute();
        $res = $stmt->get_result();
        if($res->num_rows > 0){
            return "Room already booked for selected dates!";
        }

        // Insert booking
        $booking_id = $this->getNextBookingId();
        $sql2 = "INSERT INTO bookings (booking_id, room_id, checkin, checkout, preference, payment_method)
                 VALUES (?, ?, ?, ?, ?, ?)";
        $stmt2 = $this->conn->prepare($sql2);
        $stmt2->bind_param("sissss", $booking_id, $room_id, $checkin, $checkout, $preference, $payment);
        if($stmt2->execute()){
            return true;
        } else {
            return "Database error: " . $stmt2->error;
        }
    }
}
?>
