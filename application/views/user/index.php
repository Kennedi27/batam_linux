<?php
    $this->load->view('template/header');
?>

<?php
    $this->load->view('template/nav');
?>
<body style="font-family: arial;">
    <content>
	   <?php 
            $this->load->view($content);
        ?>
    </content>

<?php
    $this->load->view('template/footer');
?>
</body>
</html>
