<?php $this->load->view('/partial/section_target'); ?>
<?php if ($id[0] == 1) { ?>
	<div id="container" ng-controller="lession1" class="container" ng-cloak>
	<input type="hidden" id="user_id" value="<?php print_r($user_id[0]) ?>">
	<?php if ($results) { ?>
		<input type="hidden" id="id_result" value="<?php print_r($results[0]->id) ?>">
		<input type="hidden" id="results1" value="<?php print_r($results[0]->lesson1) ?>">
		<input type="hidden" id="results2" value="<?php print_r($results[0]->lesson2) ?>">
		<input type="hidden" id="results3" value="<?php print_r($results[0]->lesson3) ?>">
		<input type="hidden" id="results4" value="<?php print_r($results[0]->lesson4) ?>">
	<?php } else{ ?>
		<input type="hidden" id="id_result" value="">
		<input type="hidden" id="results1" value="">
		<input type="hidden" id="results2" value="">
		<input type="hidden" id="results3" value="">
		<input type="hidden" id="results4" value="">
	<?php } ?>
		<div id="body">
			<div class="row" style="padding-top: 75px;">
				<span ng-repeat="lesson in lessons">
					<span ng-if="lesson.id == <?php echo $id[0] ?>">
						<center>
							<h1>{{lesson.title}}</h1>
							<uib-progressbar max="max" value="dynamic"><span style="color:white; white-space:nowrap;">{{hits*10}}%</span></uib-progressbar>
							<p ng-bind-html="lesson.content"></p>
						</center>
					</span>
				</span>
				<div class="row">
					<center><h1>Translate the text in spanish</h1></center>
					<div class="container">
						<center>
							<div class="col-md-6">
								<h1>{{randomQuote.english}}</h1>
							</div>
							<div class="col-md-6">
							<textarea class="form-control" rows="3" ng-model="VarSend"></textarea>
							</div>
						</center>
					</div>
				</div>
				<br>
				<?php $this->load->view('/partial/alerts'); ?>
				<br>
				<div class="row">
					<a href="#" class="btn btn-info btn-lg btn-block" role="button" ng-click="send(randomQuote.spanish,randomQuote)">Send</a>
					<a href="#" class="btn btn-primary btn-lg btn-block" role="button" ng-click="next()">Next</a>
				</div>
			</div>
		</div>
	</div>
<?php } else { ?>
	<div id="container" ng-controller="lession2" class="container" ng-cloak>
	<input type="hidden" id="user_id" value="<?php print_r($user_id[0]) ?>">
	<?php if ($results) { ?>
		<input type="hidden" id="id_result" value="<?php print_r($results[0]->id) ?>">
		<input type="hidden" id="results1" value="<?php print_r($results[0]->lesson1) ?>">
		<input type="hidden" id="results2" value="<?php print_r($results[0]->lesson2) ?>">
		<input type="hidden" id="results3" value="<?php print_r($results[0]->lesson3) ?>">
		<input type="hidden" id="results4" value="<?php print_r($results[0]->lesson4) ?>">
	<?php } else{ ?>
		<input type="hidden" id="id_result" value="">
		<input type="hidden" id="results1" value="">
		<input type="hidden" id="results2" value="">
		<input type="hidden" id="results3" value="">
		<input type="hidden" id="results4" value="">
	<?php } ?>
		<div id="body">
			<div class="row" style="padding-top: 75px;">
				<span ng-repeat="lesson in lessons">
					<span ng-if="lesson.id == <?php echo $id[0] ?>">
						<center>
							<h1>{{lesson.title}}</h1>
							<uib-progressbar max="max" value="dynamic"><span style="color:white; white-space:nowrap;">{{hits*10}}%</span></uib-progressbar>
							<p ng-bind-html="lesson.content"></p>
						</center>
					</span>
				</span>
				<div class="row">
					<center><h1>Translate the text in english</h1></center>
					<div class="container">
						<center>
							<div class="col-md-6">
								<h1>{{randomQuote.spanish}}</h1>
							</div>
							<div class="col-md-6">
							<textarea class="form-control" rows="3" ng-model="VarSend"></textarea>
							</div>
						</center>
					</div>
				</div>
				<br>
				<?php $this->load->view('/partial/alerts'); ?>
				<br>
				<div class="row">
					<a href="#" class="btn btn-info btn-lg btn-block" role="button" ng-click="send(randomQuote.english,randomQuote)">Send</a>
					<a href="#" class="btn btn-primary btn-lg btn-block" role="button" ng-click="next()">Next</a>
				</div>
			</div>
		</div>
	</div>
<?php } ?>