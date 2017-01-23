<?php $this->load->view('/partial/section_target'); ?>
<div id="container" ng-controller="lessions" class="container" ng-cloak>
	<div id="body">
		<div class="row" style="padding-top: 75px;">
			<uib-accordion close-others="oneAtATime">
				<div uib-accordion-group class="panel-default" heading="{{lesson.title}}" ng-repeat="lesson in lessons">
					<div class="row">
						<div class="col-md-6">
							<span ng-bind-html="lesson.content"></span>
						</div>
						<?php if ($results) { ?>
							<span ng-if="lesson.id == 1">
								<span ng-if="<?php print_r($results[0]->lesson1) ?> == 5">
									<div class="col-sm-4"><uib-progressbar class="progress-striped active" max="5" value="<?php print_r($results[0]->lesson1) ?>" type="success"><i><?php print_r($results[0]->lesson1*20) ?>%</i></uib-progressbar></div>
								</span>
								<span ng-if="<?php print_r($results[0]->lesson1) ?> != 5">
									<div class="col-sm-4"><uib-progressbar class="progress-striped active" max="5" value="<?php print_r($results[0]->lesson1) ?>" type="primary"><i><?php print_r($results[0]->lesson1*20) ?>%</i></uib-progressbar></div>
								</span>
							</span>
							<span ng-if="lesson.id == 2">
								<span ng-if="<?php print_r($results[0]->lesson2) ?> == 5">
									<div class="col-sm-4"><uib-progressbar class="progress-striped active" max="5" value="<?php print_r($results[0]->lesson2) ?>" type="success"><i><?php print_r($results[0]->lesson2*20) ?>%</i></uib-progressbar></div>
								</span>
								<span ng-if="<?php print_r($results[0]->lesson2) ?> != 5">
									<div class="col-sm-4"><uib-progressbar class="progress-striped active" max="5" value="<?php print_r($results[0]->lesson2) ?>" type="primary"><i><?php print_r($results[0]->lesson2*20) ?>%</i></uib-progressbar></div>
								</span>
							</span>
							<span ng-if="lesson.id == 3">
								<span ng-if="<?php print_r($results[0]->lesson3) ?> == 5">
									<div class="col-sm-4"><uib-progressbar class="progress-striped active" max="5" value="<?php print_r($results[0]->lesson3) ?>" type="success"><i><?php print_r($results[0]->lesson3*20) ?>%</i></uib-progressbar></div>
								</span>
								<span ng-if="<?php print_r($results[0]->lesson3) ?> != 5">
									<div class="col-sm-4"><uib-progressbar class="progress-striped active" max="5" value="<?php print_r($results[0]->lesson3) ?>" type="primary"><i><?php print_r($results[0]->lesson3*20) ?>%</i></uib-progressbar></div>
								</span>
							</span>
							<span ng-if="lesson.id == 4">
								<span ng-if="<?php print_r($results[0]->lesson4) ?> == 5">
									<div class="col-sm-4"><uib-progressbar class="progress-striped active" max="5" value="<?php print_r($results[0]->lesson4) ?>" type="success"><i><?php print_r($results[0]->lesson4*20) ?>%</i></uib-progressbar></div>
								</span>
								<span ng-if="<?php print_r($results[0]->lesson4) ?> != 5">
									<div class="col-sm-4"><uib-progressbar class="progress-striped active" max="5" value="<?php print_r($results[0]->lesson4) ?>" type="primary"><i><?php print_r($results[0]->lesson4*20) ?>%</i></uib-progressbar></div>
								</span>
							</span>
							<span ng-if="lesson.id == 5">
								<span ng-if="<?php print_r($results[0]->lesson5) ?> == 5">
									<div class="col-sm-4"><uib-progressbar class="progress-striped active" max="5" value="<?php print_r($results[0]->lesson5) ?>" type="success"><i><?php print_r($results[0]->lesson5*20) ?>%</i></uib-progressbar></div>
								</span>
								<span ng-if="<?php print_r($results[0]->lesson5) ?> != 5">
									<div class="col-sm-4"><uib-progressbar class="progress-striped active" max="5" value="<?php print_r($results[0]->lesson5) ?>" type="primary"><i><?php print_r($results[0]->lesson5*20) ?>%</i></uib-progressbar></div>
								</span>
							</span>
						<?php } else { ?>
								<div class="col-sm-4"><uib-progressbar class="progress-striped active" max="5" value="5" type="danger"><i>0%</i></uib-progressbar></div>
						<?php } ?>
					</div>
					<a href="<?php echo base_url('/lesson') ?>/{{lesson.id}}" class="btn btn-info btn-lg btn-block" role="button">Go to lesson</a>
				</div>
			</uib-accordion>
		</div>
	</div>
</div>