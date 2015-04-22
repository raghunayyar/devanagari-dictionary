<div class="searchwidget">
	<div class="container-fluid">
		<section>
			<div class="row">
				<div class="col-lg-12">
					<input type="text" class="form-control input input-lg search-input" placeholder="Search..."/>
				<a class="btn input-button" ng-click="resetcheckboxes()" href="#">
					<i class="fa fa-undo fa-1x"></i>
				</a>	
					<div class="col-lg-3">				
						<div id="languagesearch" class="custom-dropdown-wrapper" style="z-index: 1000;">Language
							<ul class="dropdown">
								<li ng-repeat="one in listoflanguages">
									<input type="checkbox" id="language-{{one.value}}" name="language-{{one.value}}" value="{{ one.language }}" ng-model="one.languagemodel" ng-change="changelanguage(one.language,one.value,one.languagemodel)" />
									<label for="language-{{one.value}}">{{ one.language }}</label>
								</li>
							</ul>
						</div>
						<div id="combinationsearch" class="custom-dropdown-wrapper">Combination of
							<ul class="dropdown">
								<li ng-repeat="one in listofcombinations">
									<input type="checkbox" id="combination-{{ one.value }}" name="combination-{{ one.value }}" value="{{ one.value }}" ng-model="one.combinationmodel" ng-change="changecombination(one.value,one.combinationmodel)">
									<label for="combination-{{ one.value }}">{{ one.value }}</label>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-lg-7">
						<ul class="chosen-container">
							<li class="custom-chosen">
								<div class="custom-chosen-interior">
									<div class="delete-tab" ng-click="deletelanguagetab(tab)">
										<i class="fa fa-1x fa-close"></i>
									</div>
									<span>Sanskrit</span>
								</div>
							</li>
							<li class="custom-chosen">
								<div class="custom-chosen-interior">
									<div class="delete-tab" ng-click="deletelanguagetab(tab)">
										<i class="fa fa-1x fa-close"></i>
									</div>
									<span>Hindi</span>
								</div>
							</li>
							<li class="custom-chosen">
								<div class="custom-chosen-interior">
									<div class="delete-tab" ng-click="deletelanguagetab(tab)">
										<i class="fa fa-1x fa-close"></i>
									</div>
									<span>Marathi</span>
								</div>
							</li>												
						</ul>
						<ul class="chosen-container">
							<li class="custom-chosen">
								<div class="custom-chosen-interior">
									<div class="delete-tab" ng-click="deletelanguagetab(tab)">
										<i class="fa fa-1x fa-close"></i>
									</div>
									<span>1</span>
								</div>
							</li>
							<li class="custom-chosen">
								<div class="custom-chosen-interior">
									<div class="delete-tab" ng-click="deletelanguagetab(tab)">
										<i class="fa fa-1x fa-close"></i>
									</div>
									<span>2</span>
								</div>
							</li>
							<li class="custom-chosen">
								<div class="custom-chosen-interior">
									<div class="delete-tab" ng-click="deletelanguagetab(tab)">
										<i class="fa fa-1x fa-close"></i>
									</div>
									<span>3</span>
								</div>
							</li>
						</ul>		
					</div>
					<div class="col-lg-2">
					<input type="submit" class="btn btn-success btn-lg search-button" value="Submit" />
					</div>
				</div>
			</div>
		</section>
	</div>
</div>