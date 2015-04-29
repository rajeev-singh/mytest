<?PHP
require_once("./include/fg_membersite.php");

$fgmembersite = new FGMembersite();

//Provide your site name here
$fgmembersite->SetWebsiteName('gmail.com');

//Provide the email address where you want to get notifications
$fgmembersite->SetAdminEmail('rajeevsingh041996@gmail.com');

//Provide your database login details here:
//hostname, user name, password, database name and table name
//note that the script will create the table (for example, testdb in this case)
//by itself on submitting register.php for the first time
$fgmembersite->InitDB(/*hostname*/'localhost',
                      /*username*/'root',
                      /*password*/'123456',
                      /*database name*/'testdb',
                      /*table name*/'data');


$fgmembersite->SetRandomKey('qSRcVS6DrTzrPvr');

?>
