<!--footer section start-->
			<footer>
			<?php
                           // include('../connect.php');
				$result = $db->prepare("SELECT * FROM settings");
				$result->execute();
				for($i=0; $row = $result->fetch(); $i++){


               ?>
			   <p>&copy; 2018 Admin Panel | Brought To You by <a href="https://code-projects.org/" target="_blank">Code-Projects</a></p>
          <?php } ?>
			</footer>
        <!--footer section end-->

      <!-- main content end-->
   </section>
  
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>
<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.min.js"></script>
</body>
</html>