<?php
class layout{
    public function header($conf){
        ?>
        <header>
            <h1>Welcome to <?php echo $conf['site_name']; ?></h1>
        </header>
        <?php
    }

    public function footer($conf){
        ?>
        <footer>
            <p>&copy; <?php echo date("Y"); ?> <?php echo $conf['email']; ?></p>
        </footer>
        <?php
    }
}