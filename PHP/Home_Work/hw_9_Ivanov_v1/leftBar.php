<div class="leftBar co-sm-12 col-md-4 border-1 col-lg-3 float-left m-0 p-0">
	<form action="viewHotel.php" class="mt-3" method="GET">
		<div class="input-group input-group-sm">
			<select name="id" class="col-lg-8 col-md-12 col-sm-12 col-xs-12 form-control">
				<option value="" class="">- Выберите отель -</option>
				<?php foreach ($hotels as $idHotel => $hotelItem): ?>
					<option value="<?= $idHotel ?>"><?= $hotelItem->getTitle() ?></option>
				<?php endforeach; ?>
			</select>
			<button type="submit" class="btn btn-primary col-lg-4 col-md-12 col-sm-12 col-xs-12 btn-sm">
				Перейти
			</button>
		</div>
	</form>
	<!--VISITED HOTELS-->
	<section class="visitHotels card my-4 border shadow-sm">
		<div class="card-header text-center pb-0 pb-sm-0 pb-md-0 pb-lg-0 px-sm-1">
			<h6 class=" mb-md-1 mb-sm-1 <?= !$visitedHotelsIsExist ? 'text-secondary' : '' ?>">
				Просмотренные отели
				<!-- counter -->
				<?php if ($visitedHotelsIsExist): ?>
					<p class="badge badge-count"><?= Hotel::visitedHotelsGetNum() ?></p>
				<?php endif; ?>
			</h6>
		</div>
		<?php if ($visitedHotelsIsExist): ?>
			<ul class="list-group list-group-flush" id="visitedHotels">
				<?php foreach($visitedHotelsList as $visitItem): ?>
					<li class="list-group-item">
						<a href="viewHotel.php?id=<?= $visitItem['idHotel'] ?>" class="d-block btn btn-sm text-left col-12 ">
							<?= $visitItem['titleHotel'] ?>	
						</a>
					</li>
				<?php endforeach; ?>
			</ul>
		<?php endif; ?>
	</section>
</div>