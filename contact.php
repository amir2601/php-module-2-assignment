<?php

$contacts = [];

function addContact(array &$contacts, string $name, string $email, string $number): void {

    $contacts[] = ["name" => $name, "email" => $email, "number" => $number];

}

function displayContacts(array $contacts) {
    if (empty($contacts)) {
        echo "No contact details found";
    } else {
        foreach ($contacts as $contact) {
            echo "Name : {$contact['name']} \nEmail : {$contact['email']} \nNumber : {$contact['number']} \n \n";
        }
    }
}

while(true) {
    
    echo "\nContact Management System \n";
    echo "1. Add Contact \n2. View Contact \n3. Exit \n \n";

    $choice = (int)readline("Choice an Option:");
    echo "\n";

    if ($choice === 1) {
 
        $name = (string)readline("Enter your name:");
        $email = (string)readline("Enter your email:");
        $number = (string)readline("Enter your number:");

        addContact($contacts, $name, $email, $number);

        echo "$name name added to contacts \n";
        echo "$email email added to contacts \n";
        echo "$number number added to contacts \n";

    } else if ($choice === 2) {

        displayContacts($contacts);

    } else if ($choice === 3) {
        echo "Exiting... \n";
        break;
    } else {
        echo "Invalid Choice, Please try again. \n";
    }
}

?>