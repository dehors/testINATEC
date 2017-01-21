<?php $this->load->view('/partial/section_target'); ?>
<div id="container" ng-controller="lession" class="container" ng-cloak>
	<div id="body">
		<div class="row" style="padding-top: 75px;">
			<span ng-repeat="lesson in lessons">
				<span ng-if="lesson.id == <?php echo $id[0] ?>">
					<center>
						<h1>{{lesson.title}}</h1>
						<p ng-bind-html="lesson.content"></p>
					</center>
				</span>
			</span>
			<div class="row">
				
			</div>
		</div>
	</div>
</div>