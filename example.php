<?PHP

// PHPBitcoinAddress v0.2.1 Usage Example

require_once ("PHPBitcoinAddress.php");

//CoinAddress::set_debug(false);

        $coin = CoinAddress::bitcoin();
        $public = $coin['public'];
        $private = $coin['private'];
        $cpublic = $coin['public_compressed'];
        $cprivate = $coin['private_compressed'];
        
        // Shows random keywords and salt used to generate the key pair
        $origin = $coin['key_orig'];

        echo $cpublic."<br>".$cprivate."<br><p>";
        echo $public."<br>".$private."<br><p><p>".$origin."<p>";

        echo '<p><button type="button" onclick="window.location.reload()">LAUNCH</button>';

exit;

?>
