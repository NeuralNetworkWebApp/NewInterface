<?php
/**
 * Created by PhpStorm.
 * User: Irene
 * Date: 12-Jan-16
 * Time: 1:42 PM
 */
$sqlModel = "SELECT COUNT(*) FROM model";
if ($resModel = $conn->query($sqlModel)) {

    /* Check the number of rows that match the SELECT statement */
    if ($resModel->fetchColumn() > 0) {
        /* Issue the real SELECT statement and work with the results */
        $sqlModel = "SELECT title FROM model";
    }
    /* No rows matched -- do something else */
    else {
        print "No rows matched the query.";
    }
}
$sqlTAlgorithm = "SELECT COUNT(*) FROM talgorithm";
if ($resTAlgorithm = $conn->query($sqlTAlgorithm)) {
    /* Check the number of rows that match the SELECT statement */
    if ($resTAlgorithm->fetchColumn() > 0) {
        /* Issue the real SELECT statement and work with the results */
        $sqlTAlgorithm = "SELECT title FROM talgorithm";
    }
    /* No rows matched -- do something else */
    else {
        print "No rows matched the query.";
    }
}
$sqlTrain = "SELECT COUNT(*) FROM trainset";
if ($resTrain= $conn->query($sqlTrain)) {
    /* Check the number of rows that match the SELECT statement */
    if ($resTrain->fetchColumn() > 0) {
        /* Issue the real SELECT statement and work with the results */
        $sqlTrain = "SELECT title FROM trainset";
    }
    /* No rows matched -- do something else */
    else {
        print "No rows matched the query.";
    }
}
$sqlTest = "SELECT COUNT(*) FROM testset";
if ($resTest= $conn->query($sqlTest)) {
    /* Check the number of rows that match the SELECT statement */
    if ($resTest->fetchColumn() > 0) {
        /* Issue the real SELECT statement and work with the results */
        $sqlTest = "SELECT title FROM testset";
    }
    /* No rows matched -- do something else */
    else {
        print "No rows matched the query.";
    }
}
?>