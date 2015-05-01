<div class="<?php echo $bodyclass; ?>">
	<div class="container-fluid">
		<section class="home-jumbo home-search" ng-controller="SearchController">
			<div class="welcome-message">
				<h3>Welcome to</h3>
				<h1>Devanagari Glyph Diaries</h1>
			</div>

			<?php 
				$formattributes = array(
					'method' => 'POST',
					'class' => 'form search-form',
					'name' => 'homesearchform'
				);
				$searchinput = array (
					'name' => 'searchinput',
					'type' => 'text',
					'class' => 'form-control keyboardInput input input-lg search-input',
					'placeholder' => 'Search for..',
					'ng-model' => 'searchinput'
				);
				echo form_open('home/search', $formattributes, '');
			?>

			<?php
				echo form_input($searchinput, '', '');
			?>
				<a class="btn input-button" ng-click="resetcheckboxes()" href="#">
					<i class="fa fa-undo fa-1x"></i>
				</a>				
				<div class="row negative-spacer">
					<div class="col-md-4">
						<div id="languagesearch" class="custom-dropdown-wrapper" style="z-index: 1000;">Language
							<ul class="dropdown">
								<li ng-repeat="one in listoflanguages">
									<input type="checkbox" id="language-{{one.value}}" name="language-{{one.value}}" value="{{ one.language }}" ng-model="one.languagemodel" ng-change="changelanguage(one.language,one.value,one.languagemodel)" ng-checked="one.checked"/>
									<label for="language-{{one.value}}">{{ one.language }}</label>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-md-4">
						<div id="combinationsearch" class="custom-dropdown-wrapper">Combination of
							<ul class="dropdown">
								<li ng-repeat="one in listofcombinations">
									<input type="checkbox" id="combination-{{ one.value }}" name="combination-{{ one.value }}" value="{{ one.value }}" ng-model="one.combinationmodel" ng-change="changecombination(one.value,one.combinationmodel)" ng-checked="one.checked">
									<label for="combination-{{ one.value }}">{{ one.value }}</label>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-md-4">
						<input type="submit" class="btn btn-success btn-lg search-button" value="Submit" />
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
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
					<div class="col-md-4">
						<ul class="chosen-container">
							<li class="custom-chosen" ng-repeat="tab in listofcombinationtabs">
								<div class="custom-chosen-interior">
									<div class="delete-tab" ng-click="deletecombinationtab(tab)">
										<i class="fa fa-1x fa-close"></i>
									</div>
									<span>Comb. {{ tab }}</span>
								</div>
							</li>
						</ul>
					</div>
					<div class="clear"></div>
				</div>
			<?php echo form_close(); ?>
		</section>
	</div>
</div>