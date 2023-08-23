<nav class="d-flex justify-content-center pb-4">
  <ul class="pagination"> 
    <?php 
      for ($num = 0; $num < $data['TotalPage']; $num++) {
        $page = $num + 1;
        if ($num == $data['CurrentPage']) {
          echo '<li class="page-item active">
                <a href="http://localhost/shopps/?page=' . $num . '" class="page-link">' .$page. '</a>
             </li>';
        } else {
          echo '<li class="page-item">
                <a href="http://localhost/shopps/?page=' . $num . '" class="page-link">' .$page. '</a>
              </li>';
        }
      }
    ?>
  </ul>
</nav>
    