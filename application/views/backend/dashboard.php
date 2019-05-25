<!-- <div class="row">
   <div class="col s12 m12">
      <div class="row">
         <div class="col s6 m6 l3">
            <div class="card red white-text pd-28">
               <div class="card-content white-text center-align">
                  <p class="card-title">
                     <i class="material-icons icon-m1">local_phone</i><b> Total Contacts</b>
                  </p>
                  <span class="card-title font-size38"><?php echo $contactcount;?></span>
               </div>
               <div class="card-title center-align white-text">
                  <a style="color: white;" href="<?php echo site_url("site/viewcontact"); ?>">View Contacts</a>
               </div>
            </div>
         </div>
         <div class="col s6 m6 l3">
            <div class="card pd-28 light-blue darken-2 white-text">
               <div class="card-content white-text center-align">
                  <p class="card-title">
                     <i class="material-icons icon-m1">people</i><b> Total Clients</b>
                  </p>
                  <span class="card-title font-size38"><?php echo $clientcount;?></span>
               </div>
               <div class="card-title center-align white-text">
                  <a  style="color: white;" href="<?php echo site_url("site/viewclient"); ?>">View Clients</a>
               </div>
            </div>
         </div>
         <div class="col s6 m6 l3">
            <div class="card pd-28 green accent-3 white-text">
               <div class="card-content white-text center-align">
                  <p class="card-title">
                     <i class="material-icons icon-m1">attach_money</i><b> Total Transactions</b>
                  </p>
                  <span class="card-title font-size38"><?php echo $transactioncount;?></span>
               </div>
               <div class="card-title center-align white-text">
                  <a  style="color: white;" href="<?php echo site_url("site/viewtransaction"); ?>">View Transactions</a>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<style>
.pd-28 {
    padding-bottom: 28px;

}
</style> -->





                           
                           <div class="row">
                              <div class="col-md-6 col-xl-3">
                                 <div class="mini-stat clearfix bg-white">
                                       <span class="mini-stat-icon"><i class="ti-shopping-cart"></i></span>
                                       <div class="mini-stat-info text-right text-light">
                                          <span class="counter text-white"><?php echo $contactcount;?></span> Total Contacts
                                       </div>
                                 </div>
                              </div>
                              <div class="col-md-6 col-xl-3">
                                 <div class="mini-stat clearfix bg-success">
                                       <span class="mini-stat-icon"><i class="ti-user"></i></span>
                                       <div class="mini-stat-info text-right text-light">
                                          <span class="counter text-white"><?php echo $clientcount;?></span> Total Clients
                                       </div>
                                 </div>
                              </div>
                              <div class="col-md-6 col-xl-3">
                                 <div class="mini-stat clearfix bg-orange">
                                       <span class="mini-stat-icon"><i class="ti-shopping-cart-full"></i></span>
                                       <div class="mini-stat-info text-right text-light">
                                          <span class="counter text-white"><?php echo $transactioncount;?></span> Total Transactions
                                       </div>
                                 </div>
                              </div>
                              <div class="col-md-6 col-xl-3">
                                 <div class="mini-stat clearfix bg-info">
                                       <span class="mini-stat-icon"><i class="ti-stats-up"></i></span>
                                       <div class="mini-stat-info text-right text-light">
                                          <span class="counter text-white">15</span> Amsri Users
                                       </div>
                                 </div>
                              </div>
                        </div>

                        <div class="row">
                            <div class="col-md-8">
                                <div class="card card-sec m-b-30">
                                    <div class="card-body">
                                        <h4 class="mt-0 header-title">Product sales</h4>
                                        <div id="morris-area-example" style="height: 300px"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="card card-sec m-b-30">
                                    <div class="card-body">
                                        <h4 class="mt-0 header-title">Revenue</h4>

                                        <ul class="list-inline widget-chart m-t-20 text-center">
                                            <li>
                                                <h4 class=""><b>5248</b></h4>
                                                <p class="text-muted m-b-0">Marketplace</p>
                                            </li>
                                            <li>
                                                <h4 class=""><b>321</b></h4>
                                                <p class="text-muted m-b-0">Last week</p>
                                            </li>
                                            <li>
                                                <h4 class=""><b>964</b></h4>
                                                <p class="text-muted m-b-0">Last Month</p>
                                            </li>
                                        </ul>

                                        <div id="morris-bar-example" style="height: 300px"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">

                            <div class="col-xl-8">
                                <div class="card card-sec m-b-30">
                                    <div class="card-body">
                                        <h4 class="mt-0 m-b-15 header-title">Recent Orders</h4>

                                        <div class="table-responsive">
                                            <table class="table table-hover mb-0">
                                                <thead>
                                                    <tr class="titles">
                                                        <th>Costumer Name</th>
                                                        <th>Company</th>
                                                        <th>Status</th>
                                                        <th>Invoice</th>
                                                        <th>Start date</th>
                                                        <th>Amount</th>
                                                    </tr>

                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="c-table__cell">
                                                            <div class="user-wrapper">
                                                                <div class="img-user">
                                                                    <img src="assets/images/users/user-1.jpg" alt="user" class="rounded-circle">
                                                                </div>
                                                                <div class="text-user">
                                                                    <h6>Tiger Nixon</h6>
                                                                    <p>Web Designer</p>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="c-table__cell">Dribble</td>
                                                        <td class="c-table__cell"><span class="badge badge-warning">Due</span></td>
                                                        <td class="c-table__cell">INV-001001</td>
                                                        <td class="c-table__cell">2011/04/25</td>
                                                        <td class="c-table__cell">$320,800</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="c-table__cell">
                                                            <div class="user-wrapper">
                                                                <div class="img-user">
                                                                    <img src="assets/images/users/user-2.jpg" alt="user" class="rounded-circle">
                                                                </div>
                                                                <div class="text-user">
                                                                    <h6>Tiger Nixon</h6>
                                                                    <p>Web Designer</p>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>Accountant</td>
                                                        <td><span class="badge badge-info">Paid</span></td>
                                                        <td>63</td>
                                                        <td>2011/07/25</td>
                                                        <td>$170,750</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="c-table__cell">
                                                            <div class="user-wrapper">
                                                                <div class="img-user">
                                                                    <img src="assets/images/users/user-3.jpg" alt="user" class="rounded-circle">
                                                                </div>
                                                                <div class="text-user">
                                                                    <h6>Tiger Nixon</h6>
                                                                    <p>Web Designer</p>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>Junior Technical Author</td>
                                                        <td><span class="badge badge-info">Paid</span></td>
                                                        <td>66</td>
                                                        <td>2009/01/12</td>
                                                        <td>$86,000</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="c-table__cell">
                                                            <div class="user-wrapper">
                                                                <div class="img-user">
                                                                    <img src="assets/images/users/user-4.jpg" alt="user" class="rounded-circle">
                                                                </div>
                                                                <div class="text-user">
                                                                    <h6>Tiger Nixon</h6>
                                                                    <p>Web Designer</p>
                                                                </div>
                                                            </div>
                                                        </td>
                                                
                                                        <td>Senior Javascript Developer</td>
                                                        <td><span class="badge badge-warning">Due</span></td>
                                                        <td>22</td>
                                                        <td>2012/03/29</td>
                                                        <td>$433,060</td>
                                                    </tr>
                                
                                            

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4">
                                <div class="card card-sec m-b-30">
                                    <div class="card-body">
                                        <h4 class="mt-0 header-title">Monthly Earnings</h4>

                                        <ul class="list-inline widget-chart m-t-20 text-center">
                                            <li>
                                                <h4 class=""><b>3654</b></h4>
                                                <p class="text-muted m-b-0">Marketplace</p>
                                            </li>
                                            <li>
                                                <h4 class=""><b>954</b></h4>
                                                <p class="text-muted m-b-0">Last week</p>
                                            </li>
                                            <li>
                                                <h4 class=""><b>8462</b></h4>
                                                <p class="text-muted m-b-0">Last Month</p>
                                            </li>
                                        </ul>

                                        <div id="morris-donut-example" style="height: 265px"></div>
                                    </div>
                                </div>
                            </div>

                        </div>