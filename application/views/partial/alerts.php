<div class="box-body" style="margin: 10px">
    <div class="alert alert-danger alert-dismissable" ng-hide="msgdanger">
        <h4><span class="glyphicon glyphicon-thumbs-down" aria-hidden="true"></span> {{ msg }}</h4>
    </div>
    <div class="alert alert-info alert-dismissable" ng-hide="msginfo">
        <h4 style="margin-bottom: 0;"><span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span> {{ msg }}</h4>
        <a href="#" ng-click="cancel()" class="btn btn-danger btn-xs" role="button" style="float: right;margin-top: -20px;">Cancel</a>
        <a href="#" ng-click="restart()" class="btn btn-info btn-xs" role="button" style="float: right;margin-top: -20px;margin-right: 20px;">To restart</a>
    </div>
    <div class="alert alert-warning alert-dismissable" ng-hide="msgwarning">
        <h4><span class="glyphicon glyphicon-search" aria-hidden="true"></span> {{ msg }}</h4>
    </div>
    <div class="alert alert-success alert-dismissable" ng-hide="msgsuccess">
        <h4><span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span> {{ msg }}</h4>
    </div>
</div>