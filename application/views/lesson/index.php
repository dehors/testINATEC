<?php $this->load->view('/partial/section_target'); ?>
<div id="container" ng-controller="lessions" class="container" ng-cloak>
	<div id="body">
		<div class="row" style="padding-top: 75px;">
			<uib-accordion close-others="oneAtATime">
				<div uib-accordion-group class="panel-default" heading="{{lesson.title}}" ng-repeat="lesson in lessons">
					<span ng-bind-html="lesson.content"></span>
					<a href="<?php echo base_url('/lesson') ?>/{{lesson.id}}" class="btn btn-info btn-lg btn-block" role="button">Go to lesson</a>
				</div>
			</uib-accordion>
		</div>
	</div>
</div>