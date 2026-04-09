 <?php if (isset($_SESSION['usuario'])): ?>
     <ul class="nav nav-pills">
         <li class="nav-item"><a href="index.php" class="nav-link active" aria-current="page">Início</a></li>
         <li class="nav-item"><a href="#" class="nav-link">Sobre</a></li>
         <li class="nav-item"><a href="#" class="nav-link">FAQs</a></li>
         <li class="nav-item"><a href="#" class="nav-link">Contato</a></li>
         <li class="nav-item"><a href="perfil.php" class="nav-link">Perfil</a></li>
         <li class="nav-item"><a href="sair.php" class="nav-link" style="color: red;">Sair</a></li>
     </ul>

 <?php else: ?>
     <ul class="nav nav-pills">
         <li class="nav-item"><a href="" class="nav-link" aria-current="page">Início</a></li>
         <li class="nav-item"><a href="" class="nav-link">Sobre</a></li>
         <li class="nav-item"><a href="" class="nav-link">FAQs</a></li>
         <li class="nav-item"><a href="" class="nav-link">Contato</a></li>
         <li class="nav-item"><a href="login.php" class="nav-link active">Entrar</a></li>
     </ul>

 <?php endif; ?>