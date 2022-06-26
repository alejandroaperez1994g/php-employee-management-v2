<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../public/assets/css/dashboard.css">
    <link rel="stylesheet" href="../../public/assets/css/dashboard.css">
</head>

<body>

    <!-- TABLE LISTING EMPLOYEES -->
    <main class="table-employee">
        <!-- REQUIRE FROM HEADER.PHP COMPONENTE REUTILIZABLE EN EMPLOYEE/DASHBOARD -->
        <?php include(HTML . '/header.php') ?>
        <section class="table-content">
            <div class="table-employee__top">
                <h2>EMPLOYEE TABLE.</h2>
                <button class="employee__create primary-btn" id="createEmployee">Create</button>
            </div>
            <table class="table-employee__bottom" cellspacing="0" cellpadding="0">
                <!-- TABLE HEADER -->
                <thead class="table-employee__header">
                    <tr class="table-employee__header-row">
                        <th class="table-employee__header-col">Name</th>
                        <th class="table-employee__header-col">Last name</th>
                        <th class="table-employee__header-col">Email</th>
                        <th class="table-employee__header-col">Age</th>
                        <th class="table-employee__header-col">Street</th>
                        <th class="table-employee__header-col">City</th>
                        <th class="table-employee__header-col">State</th>
                        <th class="table-employee__header-col">P. code</th>
                        <th class="table-employee__header-col">Phone</th>
                        <th class="table-employee__header-col">
                            🗑️
                        </th>
                    </tr>
                </thead>
                <!-- TABLE BODY -->
                <tbody class="table-employee__body" id="tableBody">
                    <?php
                    if (isset($this->employees)) {
                        $data = $this->employees;

                        foreach ($data as $values) {
                            echo
                            "

                            <tr class='table-employee__body-row' data-id='{$values->id}'>
                                    <td class='table-employee__body-col'> <a href='../form/render/{$values->id}' >{$values->name}</a>  </td>
                                    <td class='table-employee__body-col'>{$values->last_name}</td>
                                    <td class='table-employee__body-col'>{$values->email}</td>
                                    <td class='table-employee__body-col'>{$values->age}</td>
                                    <td class='table-employee__body-col'>{$values->streetAddress}</td>
                                    <td class='table-employee__body-col'>{$values->city}</td>
                                    <td class='table-employee__body-col'>{$values->state}</td>
                                    <td class='table-employee__body-col'>{$values->postalCode}</td>
                                    <td class='table-employee__body-col'>{$values->phoneNumber}</td>
                                    <td class='table-employee__body-col'><a href=" . BASE_URL . 'board/delete/' . $values->id .  "><button id='employeeDelete' class='employee_delete' data-id='4'>❌</button></a></td>
                                </tr>
                            ";
                        }
                    }

                    ?>
                </tbody>
            </table>
        </section>

    </main>
</body>

</html>