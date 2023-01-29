<?Php
    require_once("lib/PromptPayQR.php");
    $PromptPayQR = new PromptPayQR(); // new object
    $PromptPayQR->size = 5; // Set QR code size to 8
    $PromptPayQR->id = '0653391533'; // PromptPay ID
    $PromptPayQR->amount = 50.00; // Set amount (not necessary)
    echo '<img src="' . $PromptPayQR->generate() . '" />';
?>