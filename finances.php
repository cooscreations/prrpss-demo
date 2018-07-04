<?php

// ////////////////////////////////////////////////
// ////////////////////////////////////////////////
// ////////////////////////////////////////////////
/* ////// */     session_start ();     /* ////// */
// ////////////////////////////////////////////////
// ////////////////////////////////////////////////
//   now check the user is OK to view this page  //
/* ///// */  require ('page_access.php');  /*////*/
// ////////////////////////////////////////////////
// ////////////////////////////////////////////////
// ////////////////////////////////////////////////


$page_ID = "74";
include 'page_functions.php';
include 'db_conn.php';

page_head($page_ID);
?>



<!-- start: page -->
						<div class="row">
							<div class="col">
								<section class="card">
									<header class="card-header">
										<div class="card-actions">
											<a href="#" class="card-action card-action-toggle" data-card-toggle></a>
											<a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
										</div>
						
										<h2 class="card-title">Sales Forecast @ $200 USD / month</h2>
										<p>We operate <a href="/transparent_accounting.php">transparent accounting</a> on PRRPSS</p>
									</header>
									<div class="card-body">
								<!-- 
								<div class="row">
									<div class="col-sm-6">
										<div class="mb-3">
											<button id="addToTable" class="btn btn-primary">Add <i class="fas fa-plus"></i></button>
										</div>
									</div>
								</div>
								-->
										<table class="table table-bordered table-striped mb-0" id="datatable-tabletools">
											<thead>
												<tr>
													<th>Year</th>
													<th>Qtr</th>
													<th>Month</th>
													<th># Accounts</th>
													<th>Income</th>
													<th>Cum. Total</th>
													<th>Growth %</th>
												</tr>
											</thead>
											<tfoot>
												<tr>
													<th>Year</th>
													<th>Qtr</th>
													<th>Month</th>
													<th># Accounts</th>
													<th>Income</th>
													<th>Cum. Total</th>
													<th>Growth %</th>
												</tr>
											</tfoot>
											<tbody>
												<tr>
													<td>1</td>
													<td>1</td>
													<td>1</td>
													<td>1</td>
													<td>$200.00</td>
													<td>$200.00</td>
													<td>-</td>
												</tr>
												<tr>
													<td>1</td>
													<td>1</td>
													<td>2</td>
													<td>2</td>
													<td>$400.00</td>
													<td>$600.00</td>
													<td>300%</td>
												</tr>

												<tr>
													<td>1</td>
													<td>1</td>
													<td>3</td>
													<td>3</td>
													<td>$600.00</td>
													<td>$1,200.00</td>
													<td>200%</td>
												</tr>

												<tr>
													<td>1</td>
													<td>2</td>
													<td>4</td>
													<td>4</td>
													<td>$800.00</td>
													<td>$2,000.00</td>
													<td>167%</td>
												</tr>

												<tr>
													<td>1</td>
													<td>2</td>
													<td>5</td>
													<td>5</td>
													<td>$1,000.00</td>
													<td>$3,000.00</td>
													<td>150%</td>
												</tr>

												<tr>
													<td>1</td>
													<td>2</td>
													<td>6</td>
													<td>6</td>
													<td>$1,200.00</td>
													<td>$4,200.00</td>
													<td>140%</td>
												</tr>
												<tr>
													<td>1</td>
													<td>3</td>
													<td>7</td>
													<td>7</td>
													<td>$1,400.00</td>
													<td>$5,600.00</td>
													<td>133%</td>
												</tr>
												<tr>
													<td>1</td>
													<td>3</td>
													<td>8</td>
													<td>8</td>
													<td>$1,600.00</td>
													<td>$7,200.00</td>
													<td>129%</td>
												</tr>
												<tr>
													<td>1</td>
													<td>3</td>
													<td>9</td>
													<td>9</td>
													<td>$1,800.00</td>
													<td>$9,000.00</td>
													<td>125%</td>
												</tr>
												<tr>
													<td>1</td>
													<td>4</td>
													<td>10</td>
													<td>10</td>
													<td>$2,000.00</td>
													<td>$11,000.00</td>
													<td>122%</td>
												</tr>
												<tr>
													<td>1</td>
													<td>4</td>
													<td>11</td>
													<td>11</td>
													<td>$2,200.00</td>
													<td>$13,200.00</td>
													<td>120%</td>
												</tr>
												<tr>
													<td>1</td>
													<td>4</td>
													<td>12</td>
													<td>12</td>
													<td>$2,400.00</td>
													<td>$15,600.00</td>
													<td>118%</td>
												</tr>
												<tr>
													<td>2</td>
													<td>1</td>
													<td>1</td>
													<td>13</td>
													<td>$2,600.00</td>
													<td>$18,200.00</td>
													<td>117%</td>
												</tr>
												<tr>
													<td>2</td>
													<td>1</td>
													<td>2</td>
													<td>14</td>
													<td>$2,800.00</td>
													<td>$21,000.00</td>
													<td>115%</td>
												</tr>
												<tr>
													<td>2</td>
													<td>1</td>
													<td>3</td>
													<td>15</td>
													<td>$3,000.00</td>
													<td>$24,000.00</td>
													<td>114%</td>
												</tr>
												<tr>
													<td>2</td>
													<td>2</td>
													<td>4</td>
													<td>16</td>
													<td>$3,200.00</td>
													<td>$27,200.00</td>
													<td>113%</td>
												</tr>
												<tr>
													<td>2</td>
													<td>2</td>
													<td>5</td>
													<td>17</td>
													<td>$3,400.00</td>
													<td>$30,600.00</td>
													<td>113%</td>
												</tr>
												<tr>
													<td>2</td>
													<td>2</td>
													<td>6</td>
													<td>18</td>
													<td>$3,600.00</td>
													<td>$34,200.00</td>
													<td>112%</td>
												</tr>
												<tr>
													<td>2</td>
													<td>3</td>
													<td>7</td>
													<td>19</td>
													<td>$3,800.00</td>
													<td>$38,000.00</td>
													<td>111%</td>
												</tr>
												<tr>
													<td>2</td>
													<td>3</td>
													<td>8</td>
													<td>20</td>
													<td>$4,000.00</td>
													<td>$42,000.00</td>
													<td>111%</td>
												</tr>
												<tr>
													<td>2</td>
													<td>3</td>
													<td>9</td>
													<td>21</td>
													<td>$4,200.00</td>
													<td>$46,200.00</td>
													<td>110%</td>
												</tr>
												<tr>
													<td>2</td>
													<td>4</td>
													<td>10</td>
													<td>22</td>
													<td>$4,400.00</td>
													<td>$50,600.00</td>
													<td>110%</td>
												</tr>
												<tr>
													<td>2</td>
													<td>4</td>
													<td>11</td>
													<td>23</td>
													<td>$4,600.00</td>
													<td>$55,200.00</td>
													<td>109%</td>
												</tr>
												<tr>
													<td>2</td>
													<td>4</td>
													<td>12</td>
													<td>24</td>
													<td>$4,800.00</td>
													<td>$60,000.00</td>
													<td>109%</td>
												</tr>
												<tr>
													<td>3</td>
													<td>1</td>
													<td>1</td>
													<td>25</td>
													<td>$5,000.00</td>
													<td>$65,000.00</td>
													<td>108%</td>
												</tr>
												<tr>
													<td>3</td>
													<td>1</td>
													<td>2</td>
													<td>50</td>
													<td>$10,000.00</td>
													<td>$75,000.00</td>
													<td>115%</td>
												</tr>
												<tr>
													<td>3</td>
													<td>1</td>
													<td>3</td>
													<td>100</td>
													<td>$20,000.00</td>
													<td>$95,000.00</td>
													<td>127%</td>
												</tr>
												<tr>
													<td>3</td>
													<td>2</td>
													<td>4</td>
													<td>150</td>
													<td>$30,000.00</td>
													<td>$125,000.00</td>
													<td>132%</td>
												</tr>
												<tr>
													<td>3</td>
													<td>2</td>
													<td>5</td>
													<td>200</td>
													<td>$40,000.00</td>
													<td>$165,000.00</td>
													<td>132%</td>
												</tr>
												<tr>
													<td>3</td>
													<td>2</td>
													<td>6</td>
													<td>250</td>
													<td>$50,000.00</td>
													<td>$215,000.00</td>
													<td>130%</td>
												</tr>
												<tr>
													<td>3</td>
													<td>3</td>
													<td>7</td>
													<td>300</td>
													<td>$60,000.00</td>
													<td>$275,000.00</td>
													<td>128%</td>
												</tr>
												<tr>
													<td>3</td>
													<td>3</td>
													<td>8</td>
													<td>350</td>
													<td>$70,000.00</td>
													<td>$345,000.00</td>
													<td>125%</td>
												</tr>
												<tr>
													<td>3</td>
													<td>3</td>
													<td>9</td>
													<td>400</td>
													<td>$80,000.00</td>
													<td>$425,000.00</td>
													<td>123%</td>
												</tr>
												<tr>
													<td>3</td>
													<td>4</td>
													<td>10</td>
													<td>500</td>
													<td>$100,000.00</td>
													<td>$525,000.00</td>
													<td>124%</td>
												</tr>
												<tr>
													<td>3</td>
													<td>4</td>
													<td>11</td>
													<td>750</td>
													<td>$150,000.00</td>
													<td>$675,000.00</td>
													<td>129%</td>
												</tr>
												<tr>
													<td>3</td>
													<td>4</td>
													<td>12</td>
													<td>1,000</td>
													<td>$200,000.00</td>
													<td>$875,000.00</td>
													<td>130%</td>
												</tr>
											</tbody>
										</table>
										
									</div>
								</section>
							</div>
						</div>

<!-- end: page -->
		<?php

page_foot($page_ID);
?>
