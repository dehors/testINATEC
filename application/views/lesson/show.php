<?php $this->load->view('/partial/section_target'); ?>
<div id="container" ng-controller="lession" class="container" ng-cloak>
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
				<a href="#" class="btn btn-primary btn-lg btn-block" role="button">Next</a>
			</div>
		</div>
	</div>
</div>