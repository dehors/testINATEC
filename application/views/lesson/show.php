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
		<input type="hidden" id="id_result" value="null">
		<input type="hidden" id="results1" value="null">
		<input type="hidden" id="results2" value="null">
		<input type="hidden" id="results3" value="null">
		<input type="hidden" id="results4" value="null">
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
<?php } else if($id[0] == 2) { ?>
	<div id="container" ng-controller="lession2" class="container" ng-cloak>
	<input type="hidden" id="user_id" value="<?php print_r($user_id[0]) ?>">
	<?php if ($results) { ?>
		<input type="hidden" id="id_result" value="<?php print_r($results[0]->id) ?>">
		<input type="hidden" id="results1" value="<?php print_r($results[0]->lesson1) ?>">
		<input type="hidden" id="results2" value="<?php print_r($results[0]->lesson2) ?>">
		<input type="hidden" id="results3" value="<?php print_r($results[0]->lesson3) ?>">
		<input type="hidden" id="results4" value="<?php print_r($results[0]->lesson4) ?>">
	<?php } else{ ?>
		<input type="hidden" id="id_result" value="null">
		<input type="hidden" id="results1" value="null">
		<input type="hidden" id="results2" value="null">
		<input type="hidden" id="results3" value="null">
		<input type="hidden" id="results4" value="null">
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
<?php } else if($id[0] == 3){ ?>
	<div id="container" ng-controller="lession3" class="container" ng-cloak>
	<input type="hidden" id="user_id" value="<?php print_r($user_id[0]) ?>">
	<?php if ($results) { ?>
		<input type="hidden" id="id_result" value="<?php print_r($results[0]->id) ?>">
		<input type="hidden" id="results1" value="<?php print_r($results[0]->lesson1) ?>">
		<input type="hidden" id="results2" value="<?php print_r($results[0]->lesson2) ?>">
		<input type="hidden" id="results3" value="<?php print_r($results[0]->lesson3) ?>">
		<input type="hidden" id="results4" value="<?php print_r($results[0]->lesson4) ?>">
	<?php } else{ ?>
		<input type="hidden" id="id_result" value="null">
		<input type="hidden" id="results1" value="null">
		<input type="hidden" id="results2" value="null">
		<input type="hidden" id="results3" value="null">
		<input type="hidden" id="results4" value="null">
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
					<center><h1>Select the correct option</h1></center>
					<div class="container">
						<center>
							<div class="row">
								<h1 style="font-size: 36px;">{{optionSelect.english}}</h1>
							</div>
							<div class="row">
								<span ng-repeat="e in auxSelectImg track by $index">
									<div class="col-xs-6 col-md-4">
										<a href="#" ng-click="send(e.english,optionSelect.id)" class="thumbnail" style="width: 205px;">
											<img src="<?php echo base_url('public/upload') ?>/{{ e.id }}.jpg" alt="..." style="width:205px;height:262px;">
										</a>
									</div>
								</span>
							</div>
						</center>
					</div>
				</div>
				<br>
				<?php $this->load->view('/partial/alerts'); ?>
				<br>
				<div class="row">
					<!-- <a href="#" class="btn btn-info btn-lg btn-block" role="button" ng-click="send(randomQuote.english,randomQuote)">Send</a>
 -->					<a href="#" class="btn btn-primary btn-lg btn-block" role="button" ng-click="next()">Next</a>
				</div>
			</div>
		</div>
	</div>
<?php }else{ ?>
	<div id="container" ng-controller="lession4" class="container" ng-cloak>
	<input type="hidden" id="user_id" value="<?php print_r($user_id[0]) ?>">
	<?php if ($results) { ?>
		<input type="hidden" id="id_result" value="<?php print_r($results[0]->id) ?>">
		<input type="hidden" id="results1" value="<?php print_r($results[0]->lesson1) ?>">
		<input type="hidden" id="results2" value="<?php print_r($results[0]->lesson2) ?>">
		<input type="hidden" id="results3" value="<?php print_r($results[0]->lesson3) ?>">
		<input type="hidden" id="results4" value="<?php print_r($results[0]->lesson4) ?>">
	<?php } else{ ?>
		<input type="hidden" id="id_result" value="null">
		<input type="hidden" id="results1" value="null">
		<input type="hidden" id="results2" value="null">
		<input type="hidden" id="results3" value="null">
		<input type="hidden" id="results4" value="null">
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
					<center><h1>Select the correct word</h1></center>
					<div class="container">
						<center style="font-size: 35px;">
							<div class="row">
								<span ng-if="optionCompleted.type == 1">
									{{optionCompletedF}} <select ng-model="optionSelected" ng-options="color as color.name  for color in colors" ng-change="send(optionCompleted.english,optionCompleted,optionSelected)"></select> {{optionCompletedS}}
								</span>
								<span ng-if="optionCompleted.type == 2">
									<select ng-model="optionSelected" ng-options="color as color.name  for color in colors" ng-change="send(optionCompleted.english,optionCompleted,optionSelected)"></select> {{optionCompletedS}}
								</span>
							</div>
							<div class="row">
								<br>
								<div class="col-xs-6 col-md-12">
								<a href="#"  class="thumbnail" style="width: 205px;">
										<img src="<?php echo base_url('public/upload') ?>/{{ optionCompleted.id }}.jpg" alt="..." style="width:205px;height:262px;">
									</a>
								</div>
							</div>
						</center>
					</div>
				</div>
				<br>
				<?php $this->load->view('/partial/alerts'); ?>
				<br>
				<div class="row">
					<!-- span ng-if="optionCompleted.type == 1">
						<a href="#" class="btn btn-info btn-lg btn-block" role="button" ng-click="send(optionCompleted.english,optionCompleted)">Send</a>
					</span>
					<span ng-if="optionCompleted.type == 2">
						<a href="#" class="btn btn-info btn-lg btn-block" role="button" ng-click="send(optionCompleted.english,optionCompleted)">Send</a>
					</span> -->
					<a href="#" class="btn btn-primary btn-lg btn-block" role="button" ng-click="next()">Next</a>
				</div>
			</div>
		</div>
	</div>
<?php } ?>