<div class="col-lg-6" ng-controller="todo_finctrl">
    <div class="panel panel-danger">
        <div class="panel-heading" style="overflow: hidden;">
        <p class="panel-title">Finished</p>
        <p class="chip"><% total_task %></p>
        </div>
            
            <ul class="panel-body progress-body">
                <li class="progress-entity " ng-class="{finishedbottom:$index != total_task-1}" ng-repeat="data in list_data" ng-if="total_task != 0">
                <p class="progress-text"><% data.des %></p>
                <button class="btn btn-danger  progress-button"  style="float:right;" data-position= '<%$index%>' ng-click="finish_progress($event)">Finished</button>
                <button class="btn btn-primary  progress-button"  style="float:right;" data-position= '<%$index%>' ng-click="return_progress($event)">On-Progress</button>
                </li>
                <li class="progress-entity " ng-if="total_task < 1">
                    <p ng-if="Status == 'LOADING'">
                        LOADING....
                    </p>
                    <p ng-if="Status == 'IF_EMPTY'">
                        You Have No Finished Work
                    </p>
                    <p ng-if="Status == 'FAIL_UPDATE'">
                        FAIL TO GET FROM SERVER
                    </p>
                </li>
            </ul>

    </div>
</div>