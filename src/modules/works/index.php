<?php
	if (!defined('DERUWORK')) {
		die('Доступ запрещен!');
	}
?>

<link rel="stylesheet" type="text/css" href="css/works.min.css">

<div class="container_fluid">
	<div class="works">
		<div class="wrapper_title">
			Наше портфолио
		</div>
		<?php
			if ($group != 1) {
				echo '';
			} else {
				echo '<div class="add_work">
						<div class="add_work_block">
							<div class="add_work_title">
								Добавить новую работу
							</div>
							<div class="add_work_container">
								<form id="add_case" method="POST" action="modules/works/update.php" enctype="multipart/form-data">
									<div class="add_work_input">
										<input type="text" name="firstname" placeholder="Название проекта" required>
									</div>
									<div class="add_work_input">
										<input type="text" name="secondname" placeholder="Тип проекта" required>
									</div>
									<div class="add_work_input">
										<input type="text" name="url" placeholder="Ссылка на проект" required>
									</div>
									<div class="add_work_input">
										<select name="color">
											<option disabled selected>Выберите цвет</option>
											<option class="blood">blood</option>
											<option class="purple">purple</option>
											<option class="darkgreen">darkgreen</option>
											<option class="tide">tide</option>
											<option class="gray">gray</option>
											<option class="sky">sky</option>
										</select>
									</div>
									<div class="add_work_input">
										<input type="file" class="add_file" name="image">
									</div>
									<div class="add_confirm">
										<button type="submit" class="add_case">Добавить</button>
									</div>
								</form>
							</div>
						</div>
					</div>';
			}
		?>
		<div class="portblock">
			<div class="caseblock">
				<?php
					$sql = $link->prepare("SELECT * FROM `deru_works` ORDER BY `id` DESC");
					$sql->execute();
					if($sql->rowCount() > 0) {
						while($table = $sql->fetch(PDO::FETCH_BOTH)) {
							echo '<div class="case_container">
									<div data-id="'.$table['id'].'" class="case">
										<a target="_blank" href="'.$table['url'].'">
											<div data-id="'.$table['id'].'" class="mask">';
							if ($group != 1) {
							} else {
									echo '<div class="delete">
												<form id="delete">
													<input type="text" class="delete_count" name="delete" value="'.$table['id'].'">
													<input type="text" class="delete_image" name="delete_image" value="'.$table['image'].'">
													<button type="submit" class="delete_button">x</button>
												</form>
											</div>';
							}
									echo '</div>
											<img src="css/images/works/'.$table['image'].'">
											<div data-id="'.$table['id'].'" class="textblock '.$table['color'].'">
												<div class="case_title">
													'.$table['firstname'].'
												</div>
												<div class="case_text">
													'.$table['secondname'].'
												</div>
											</div>
										</a>
									</div>
								</div>';
						}
					}
				?>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript" src="/modules/works/js/script.js"></script>