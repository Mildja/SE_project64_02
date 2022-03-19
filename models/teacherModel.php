<?php
class AtkTestResult
{

    public $ATR_id;
    public $ATR_color;
    public $ATR_TestResult;
    public $ATR_date;
    public $ATR_Time;
    public $ATR_Symptom;
    public $Q_id;

    public function __construct($ATR_id, $ATR_color, $ATR_TestResult, $ATR_date, $ATR_Time, $ATR_Symptom, $Q_id)
    {
        $this->ATR_id = $ATR_id;
        $this->ATR_color = $ATR_color;
        $this->ATR_TestResult = $ATR_TestResult;
        $this->ATR_date = $ATR_date;
        $this->ATR_Time = $ATR_Time;
        $this->ATR_Symptom = $ATR_Symptom;
        $this->Q_id = $Q_id;
    }

    public static function getAll()
    {
        $AtkTestResultList = [];
        require("connection_connect.php");
        $sql = "SELECT * from AtkTestResult";
        $result = $conn->query($sql);
        while ($row = $result->fetch_assoc()) {
            $ATR_id = $row["ATR_id"];
            $ATR_color = $row["ATR_color"];
            $ATR_TestResult = $row["ATR_TestResult"];
            $ATR_date = $row["ATR_date"];
            $ATR_Time = $row["ATR_Time"];
            $ATR_Symptom  = $row["ATR_Symptom "];
            $Q_id  = $row["Q_id"];
            $AtkTestResultList[] = new AtkTestResult($ATR_id, $ATR_color, $ATR_TestResult, $ATR_date, $ATR_Time, $ATR_Symptom, $Q_id);
        }
        require("connection_close.php");

        return $AtkTestResultList;
    }
}
