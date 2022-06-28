<?php
// if (!isset($_SESSION)) {
//     session_start();
// }

// if (!isset($_SESSION['login']) || $_SESSION['login'] === false) {
//     header('Location: ../');
// }
// 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Employee</title>
    <!-- <script src="../assets/js/checkLogin.js" defer></script> -->
    <link rel="stylesheet" href="../public/assets/css/employee.css">
    <link rel="stylesheet" href="../../public/assets/css/employee.css">
</head>

<body>

    <main class="employee-update">
        <!-- REQUIRE FROM HEADER.PHP COMPONENTE REUTILIZABLE EN EMPLOYEE/DASHBOARD -->
        <?php include(HTML . '/header.php') ?>

        <section class="employee-form">

            <form action=<?php if (isset($this->employee)) {
                                echo "../update/{$this->employee[0]->id}";
                            } else {
                                echo "./create";
                            }
                            ?> method='POST'>

                <!-- FIELD 1  -->
                <fieldset class="employee-update__fieldset">
                    <!-- NAME -->
                    <label for="nameUpdate" class="employee-update__label">
                        <span>Name:</span>
                        <input type="text" class="employee-update__input" name="nameUpdate" id="nameUpdate" value=" <?php if (isset($this->employee)) echo $this->employee[0]->name  ?>" />
                    </label>
                    <!-- LASTNAME -->
                    <label for="lastNameUpdate" class="employee-update__label">
                        <span>Last name:</span>
                        <input type="text" class="employee-update__input" name="lastNameUpdate" id="lastNameUpdate" value="<?php if (isset($this->employee)) echo $this->employee[0]->last_name ?>" />
                    </label>
                </fieldset>
                <!-- FIELD 2 -->
                <fieldset class="employee-update__fieldset">
                    <!-- EMAIL -->
                    <label for="emailUpdate" class="employee-update__label">
                        <span>Email:</span>
                        <input type="email" class="employee-update__input" name="emailUpdate" id="emailUpdate" value="<?php if (isset($this->employee)) echo $this->employee[0]->email ?>" />
                    </label>
                    <!-- GENDER -->

                    <label for="" class="employee-update__label">
                        <span>Gender</span>
                        <select class="employee-update__input" name="genderUpdate" id="genderUpdate">
                            <?php
                            if ($this->employee[0]->gender == 'man') {
                                echo
                                '<option value="men" selected>Man</option>
                                <option value="women">Woman</option>';
                            } else if ($this->employee[0]->gender == 'woman') {
                                echo
                                '<option value="men">Man</option>
                                <option value="women" selected>Woman</option>';
                            } else echo
                            '<option value="men">Man</option>
                                <option value="women">Woman</option>'
                            ?>
                        </select>
                    </label>
                </fieldset>
                <!-- FIELD 3 -->
                <fieldset class="employee-update__fieldset">
                    <!-- CITY -->
                    <label for="cityUpdate" class="employee-update__label">
                        <span>City</span>
                        <input type="text" class="employee-update__input" name="cityUpdate" id="cityUpdate" value="<?php if (isset($this->employee)) echo $this->employee[0]->city ?>" />
                    </label>
                    <!-- STREET ADDRESS -->
                    <label for="streetUpdate" class="employee-update__label">
                        <span>Street</span>
                        <input type="text" class="employee-update__input" name="streetUpdate" id="streetUpdate" value="<?php if (isset($this->employee)) echo $this->employee[0]->streetAddress ?>" />
                    </label>
                </fieldset>
                <!-- FIELDSET 4 -->
                <fieldset class="employee-update__fieldset">
                    <!-- STATE -->
                    <label for="stateUpdate" class="employee-update__label">
                        <span>State:</span>
                        <input type="text" class="employee-update__input" name="stateUpdate" id="stateUpdate" value="<?php if (isset($this->employee)) echo $this->employee[0]->state ?>" />
                    </label>
                    <!-- AGE -->
                    <label for="ageUpdate" class="employee-update__label">
                        <span>Age:</span>
                        <input type="number" class="employee-update__input" name="ageUpdate" id="ageUpdate" Value="<?php if (isset($this->employee)) echo $this->employee[0]->age ?>" />
                    </label>
                </fieldset>
                <!-- FIELDSET 5 -->
                <fieldset class="employee-update__fieldset">
                    <!-- POSTAL CODE -->
                    <label for="postalUpdate" class="employee-update__label">
                        <span>Postal code:</span>
                        <input type="number" class="employee-update__input" name="postalUpdate" id="postalUpdate" Value="<?php if (isset($this->employee)) echo $this->employee[0]->postalCode ?>" />
                    </label>
                    <!-- PHONE NUMBER -->
                    <label for="phoneUpdate" class="employee-update__label">
                        <span>Phone number:</span>
                        <input type="text" class="employee-update__input" name="phoneUpdate" id="phoneUpdate" value="<?php if (isset($this->employee)) echo $this->employee[0]->phoneNumber ?>" />
                    </label>
                </fieldset>
                <!-- FIELDSET 6 -->
                <fieldset class="employee-update__fieldset update-container__btn">
                    <!-- SEND DATA TO UPDATE -->
                    <?php

                    if (isset($this->message)) {
                        // echo $this->message;
                        echo "<p class='create__btn__update' style='background-color:#FFDEAF; border-radius: 0.6rem; user-select: none; margin-right: 0.6rem'>{$this->message}</p>";
                    }

                    if (isset($this->employee)) {
                        echo "<a href='./form/update/{$this->employee[0]->id}'><button class='primary-btn create__btn__update' name='function' value='create'>Update</button></a>";
                    } else {
                        echo "  <a href='../src/dashboard.php'><button class='primary-btn create__btn__update' name='function' value='create'>Send</button></a>";
                    }
                    ?>

                </fieldset>
            </form>
            <!-- RETURN TO DASHBOARD -->
            <a href="<?php echo BASE_URL . "board/consult" ?>"><button class="return__btn">🔙</button></a>
    </main>
</body>

</html>