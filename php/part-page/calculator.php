<div class="panel panel-primary ">
                  <div class="panel-body text-center">
                    <?php echo  $_SESSION['first_name'].' '.$_SESSION['last_name'] ?>
                  </div>
                  <div class="panel-footer">
                    <ul class="list-group">
                      <li class="list-group-item workingDay"></li>
                      <li class="list-group-item price"><sub>грн</sub></li>
                      <li class="list-group-item visits"></li>
                      <li class="list-group-item payment">
                        <p>
                          <span id="money-word"></span>
                          <span id="money"><i></i></span><span id="money-value"></span>
                        </p>
                      </li>
                    </ul>
                  </div>
                  <span id="salary"><?php echo $_SESSION['money'];?></span>
                </div>