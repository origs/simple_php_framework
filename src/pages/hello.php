<?php $name = $request->get('name', 'World') ?>

<?php echo htmlspecialchars($name, ENT_QUOTES, 'UTF-8') ?>