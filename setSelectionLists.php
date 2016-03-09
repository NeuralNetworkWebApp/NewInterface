<?php
/**
 * Created by PhpStorm.
 * User: Irene
 * Date: 12-Jan-16
 * Time: 1:42 PM
 */
require "MySqlConnect.php";
$Model = $conn->prepare("SELECT title FROM model");
$Model->execute();

$ResultModel = $Model->fetchAll(PDO::FETCH_ASSOC);
foreach($ResultModel as $row) {
    print $row['title'];
}

$TrainAlgorithm = $conn->prepare("SELECT title FROM trainalgorithm");
$TrainAlgorithm->execute();

$ResultTrainAlgorithm = $TrainAlgorithm->fetchAll(PDO::FETCH_ASSOC);
foreach($ResultTrainAlgorithm as $row) {
    print $row['title'];
}

$TestSet = $conn->prepare("SELECT title FROM testset");
$TestSet->execute();
$ResultTestSet = $TestSet->fetchAll(PDO::FETCH_ASSOC);
foreach($ResultTestSet as $row) {
    print $row['title'];
}

?>