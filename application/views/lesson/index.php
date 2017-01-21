<?php $this->load->view('/partial/section_target'); ?>
<div id="container" ng-controller="lessions" class="container" ng-cloak>
	<div id="body">
		<div class="row" style="padding-top: 75px;">
			<uib-accordion close-others="oneAtATime">
				<div uib-accordion-group class="panel-default" heading="{{group.title}}" ng-repeat="group in groups">
					<span ng-bind-html="group.content"></span>
					<button type="button" class="btn btn-info btn-lg btn-block">Go to lession</button>
				</div>
			</uib-accordion>
		</div>
	</div>
</div>