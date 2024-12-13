<?php
$contacts=[];
function addcontact(array &$contacts,string $name,string $email,string $phone)
:void{
$contacts[]=['name'=>$name, 'email'=>$email, 'phone'=>$phone];
}

function displayContacts(array $contacts): void{
    if(empty($contacts))
    {
        echo"No contacts available.\n";
    }
    else 
    {
        foreach($contacts as $contact)
        echo"Name : {$contact['name']},Email : {$contact['email']},Phone:{$contact['phone']}\n";
    }
}

while(true)
{
echo"Contact Management Menu: \n";
echo "1. Add Contact \n2. View Contacts\n3. Exit\n";
$choice=(int)readline("Enter your choice:");
if($choice==1)
{
    $name=readline("Enter your name: ");
    $email=readline("Enter email: ");
    $phone=readline("Enter Phone number:  ");
    addcontact($contacts,$name,$email,$phone);
    echo "$name  is succesfully inserted\n";
}
elseif($choice==2)
{
    displayContacts($contacts);

}
elseif($choice==3)
{
echo"Exiting....Visit again ";
break;
}



}