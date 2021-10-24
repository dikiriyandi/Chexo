<!-- get data website -->
<?php 

	$website = $this->db->get('website')->row_array();

?>

<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
	    	&copy; <?= $website['webs_copyright'] ?>
        </div>
    </div>
</footer>