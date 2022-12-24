<?php
session_start();
include "db_conn.php";

$addictiontype = [];

// if (
//     isset($_POST['services'])
// ) {
    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    // $services = $_POST['services'];

    $alcoholic = '';
    $smoker = '';

    $aq1 = '';
    $aq2 = '';
    $aq3 = '';

    $sq1 = '';
    $sq2 = '';
    $sq3 = '';

    // $user_data = 'services=' . $services;
    $user_data = '';

    // if (empty($services)) {
    //     header("Location: user.php?error=Services is required&$user_data");
    //     exit();
    // } else 
    if (
        !isset($_POST['addictiontype'])
    ) {
        header("Location: user.php?error=Please select any one adiction type select&$user_data");
        exit();
    }

    $addictiontype = $_POST['addictiontype'];

    if (count($addictiontype) == 2) {
        $alcoholic = $addictiontype[0];
        $smoker = $addictiontype[1];
    } else {
        if (count($addictiontype) == 0) {
            header("Location: user.php?error=Please select any one adiction type select&$user_data");
            exit();
        } else {
            if ($addictiontype[0] === 'alcoholic') {
                $alcoholic = $addictiontype[0];
                $aq1 = test_input($_POST['aq1']);
                $aq2 = test_input($_POST['aq2']);
                $aq3 = test_input($_POST['aq3']);
                $user_data .= '&alcoholic=' . $alcoholic . '&aq1=' . $aq1 . '&aq2=' . $aq2 . '&aq3=' . $aq3;

                if (empty($aq1)) {
                    header("Location: user.php?error=question 1 is required&$user_data");
                    exit();
                } else if (empty($aq2)) {
                    header("Location: user.php?error=question 2 is required&$user_data");
                    exit();
                } else if (empty($aq3)) {
                    header("Location: user.php?error=question 3 is required&$user_data");
                    exit();
                }
            } else {
                $smoker = $addictiontype[0];
                $sq1 = test_input($_POST['sq1']);
                $sq2 = test_input($_POST['sq2']);
                $sq3 = test_input($_POST['sq3']);
                $user_data .= '&smoker=' . $smoker . '&sq1=' . $sq1 . '&sq2=' . $sq2 . '&sq3=' . $sq3;

                if (empty($sq1)) {
                    header("Location: user.php?error=question 1 is required&$user_data");
                    exit();
                } else if (empty($sq2)) {
                    header("Location: user.php?error=question 2 is required&$user_data");
                    exit();
                } else if (empty($sq3)) {
                    header("Location: user.php?error=question 3 is required&$user_data");
                    exit();
                }
            }
        }
    }
    $email = $_SESSION['email'];

    $sql2 = "INSERT INTO addiction_info(email, services, Addiction1, aq1, aq2, aq3, Addiction2, sq1, sq2, sq3) VALUES('$email', '$services', '$alcoholic', '$aq1', '$aq2', '$aq3', '$smoker', '$sq1', '$sq2', '$sq3')";
    echo $sql2;
    $result2 = mysqli_query($conn, $sql2);


    if ($result2) {
        header("Location: user.php?success=Your information save successfully, we shortly reply to you.");
        exit();
    } else {
        header("Location: user.php?error=unknown error occurred&$user_data");
        exit();
    }
// } else {
//     header("Location: user.php");
//     exit();
// }
