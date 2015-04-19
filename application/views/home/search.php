<div class="<?php echo $bodyclass; ?>">
	<div class="container-fluid">
		<section class="home-jumbo home-search" ng-controller="SearchController">
			<form class="form search-form" name="homesearchform">
				<input type="text" class="input form-control input-lg search-input" placeholder="Search.." ng-model="searchinput" required/>
				<button type="submit" class="btn input-button" ng-click="resetcheckboxes()">
					<i class="fa fa-undo fa-1x"></i>
				</button>				
				<div class="row">
					<div class="col-md-3">
						<div id="languagesearch" class="custom-dropdown-wrapper" style="z-index: 1000;">Language
							<ul class="dropdown">
								<li ng-repeat="one in listoflanguages">
									<input type="checkbox" id="language-{{one.value}}" name="language-{{one.value}}" value="{{ one.language }}" ng-model="one.languagemodel" ng-change="changelanguage(one.language,one.value,one.languagemodel)" />
									<label for="language-{{one.value}}">{{ one.language }}</label>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-md-9">
						<ul class="chosen-container">
							<li class="custom-chosen" ng-repeat="tab in listoflanguagetabs">
								<div class="custom-chosen-interior">
									<div class="delete-tab" ng-click="deletelanguagetab(tab)">
										<i class="fa fa-1x fa-close"></i>
									</div>
									<span>{{ tab.language }}</span>
								</div>
							</li>
						</ul>
					</div>
					<div class="clear"></div>
				</div>

				<div class="row">
					<div class="col-md-3">
						<div id="combinationsearch" class="custom-dropdown-wrapper">Combination
							<ul class="dropdown">
								<li ng-repeat="one in listofcombinations">
									<input type="checkbox" id="combination-{{ one.value }}" name="combination-{{ one.value }}" value="{{ one.value }}" ng-model="one.combinationmodel" ng-change="changecombination(one.value,one.combinationmodel)">
									<label for="combination-{{ one.value }}">{{ one.value }}</label>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-md-9">
						<ul class="chosen-container">
							<li class="custom-chosen" ng-repeat="tab in listofcombinationtabs">
								<div class="custom-chosen-interior">
									<div class="delete-tab" ng-click="deletecombinationtab(tab)">
										<i class="fa fa-1x fa-close"></i>
									</div>
									<span>{{ tab }}</span>
								</div>
							</li>
						</ul>
					</div>
					<div class="clear"></div>
				</div>

				<a href="#about" class="btn btn-primary" id="know-more">Know More</a>
				<button type="submit" class="btn btn-success btn-lg" ng-disabled="homesearchform.$invalid">
					<i class="fa fa-search fa-1x"></i>
					Search
				</button>
			</form>
		</section>
	</div>
</div>