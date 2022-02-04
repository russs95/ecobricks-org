<?php require_once ("lang.php");
echo <<<_END

<!DOCTYPE html>

<!-- this grabs the language identifier for the page so that it can used in the meta and canonical url variables-->

<html lang="$lang">


<HEAD>

<!--Image files to preload that are unique to this page-->

<link rel="preload" as="image" href="logos/gea-horizontal.svg">
<link rel="preload" as="image" href="svgs/eb-blue.svg">

_END;?>

<?php require_once ("meta/sequest-$lang.php");?>

<?php require_once ("header.php");?>


<!-- CUSTOM PAGE SCRIPTS-->
<script src="accordion-scripts.js"></script> 


<STYLE>


	
@media screen and (max-width: 700px) { 
	.splash-content-block {
		text-align: left;
		height: 70vh;
		padding: 50px 5% 25px 5%;
		margin-bottom: 0px;
		z-index: 5;
		
		background: url(wp-content/uploads/2020/05/BlUE-ode-to-plastic-Sequestration.svg) bottom;
		background-color: #8BBAF0;
    	background-repeat: no-repeat;
		background-size: cover;
		margin-top: 45px;
		width: 100%;
		display: flex;
 		box-sizing: border-box;
		flex-direction: column;
	position: relative;

	}
}


@media screen and (min-width: 700px) { 
	.splash-content-block {
		text-align: left;
		height: 60vh;
		padding: 50px 7% 50px 7%;
		z-index: 5;
		position: relative;
		
		background: url(wp-content/uploads/2020/05/BlUE-ode-to-plastic-Sequestration.svg) bottom;
		background-color: #8BBAF0;
    	background-repeat: no-repeat;
		margin: -3px 0 -20px 0;
		display: flex;
 		 flex-wrap: wrap;
 		 box-sizing: border-box;
		  flex-direction: row;
		  width: 100%;
		  background-size: cover;

	position: relative;


}
}


@media screen and (min-width: 700px) { 
.splash-image {
  z-index: 5;
  position: relative;
  text-align: center;
  flex: 35%;
	padding: 0px;
	box-sizing: border-box;
	margin-top: 0px;
}
}


@media screen and (min-width: 700px) { 
.splash-box {
  z-index: 5;
  position: relative;
  flex: 65%;
	padding: 10px 30px 0px 0px;
	box-sizing: border-box;
	text-align: right;
}
}



@media screen and (max-width: 700px) { 
.splash-image {
  z-index: 5;
  position: relative;
  text-align: left;
  flex: 25%;
  width: 250px;
	padding: 0px;
	box-sizing: border-box;
	margin: 0px 0px 0px 10px;
}
}



@media screen and (max-width: 700px) { 
.splash-box {
	position: relative;
  flex: 100%;
	padding: 10px 10px 0px 0px;
	box-sizing: border-box;
	text-align: right;
}
}



.splash-heading { 
  font-family: 'Mulish', Arial, Helvetica, sans-serif;
  color: white;
  font-weight: 500;
  text-shadow: 0 0 8px black;

}

@media screen and (max-width: 700px) {
	.splash-heading {
      font-size: 2.0em;
      line-height: 1.1;
      margin: 10px 0;
  }
}

@media screen and (min-width: 700px) {
	.splash-heading {
      font-size: 3em;
      line-height: 1.3;
      margin: 40px 0 10px;
  }
}


.splash-sub {
  font-family: 'Mulish', Arial, Helvetica, sans-serif;
  color: #D5D5D5;
  /*text-shadow: 0px 0px 10px #fff;*/
  margin: 15px 0;
}

@media screen and (max-width: 700px) {
	.splash-sub {
		font-size: 1.0em;
		line-height: 1.3;
		font-weight: 400;
  }
}
@media screen and (min-width: 700px) {
	.splash-sub {
		font-size: 1.8em;
		line-height: 1.3;
		font-weight: 400;
  }
}


#splash-bar {
	margin-top: -50px;
	width: 100%;
	background-color: #8BBAF0;
	height:100px;	
	box-shadow: 0 8px 7px rgba(85, 84, 84, 0.4);
	position: relative;
	z-index: 0;
	-webkit-transform: skewY(-3deg);
  -moz-transform: skewY(-3deg);
  -ms-transform: skewY(-3deg);
  -o-transform: skewY(-3deg);
  transform: skewY(-3deg);

	margin-bottom: 40px;

}


	
</style>	

</head>
							  
											  
<BODY id="full-page">

	<div id="load-background">

<!-- MENU BAR-->	
         
		<?php include 'menu-bar.php';?>

<!--PAGE BANNER-->

	
<div class="splash-content-block">
	<div class="splash-box">
		<div class="splash-heading">Plastic Sequestration</div>
	<div class="splash-sub">By following the Earth’s example with our plastic we can make a greening contribution to the biosphere.</div>
	</div>
	<div class="splash-image"><img src="https://storage.arc.io/cdn-8f68538f8fb193eb1cc8/cdn.ecobricks.org%2Fwp-content%2Fuploads%2F2020%2F12%2FBare-biosphere-1000px-3.png?_arc_client=serviceWorker&propertyId=Z7EC7Cze" style="width: 80%;"></div>	
</div>
<div id="splash-bar"></div>
<!--<div id="header-bar2"></div>-->


<!-- PAGE CONTENT-->

<a name="top"></a>

<div id="main-content">
<!-- The flexible grid (content) -->
	<div class="row">
		<div class="main">

			<div class="lead-page-paragraph">
				<p>The science is clear:  Plastic loose in the biosphere harms ecologies, humans and animals.  The research is also clear:  For the last fifty years, industrial methods of plastic processing have accelerated plastic consumption, production and pollution while becoming a major source of global CO2 emissions.</p>
			</div>
			
			
			<div class="page-paragraph">
						<p>Securing our plastic, as well as transitioning from it, has never been more important.  Fortunately, we have an epic example to follow.</p>

                        <p>Just as the Earth sequestered carbon to cultivate and green the biosphere, so too can we compact, secure, cycle and store our plastic. By following the Earth’s example of biosphere benefit, consciousness raising and net-greening we can be confident of making a valuable ecological contribution.</p>

                        <p>We call this, plastic sequestration.</p>
							
            </div>	
			
		

	
			<div class="reg-content-block" id="block1">
				
				<div class="opener-header">
					
					<div class="opener-header-text">
						<h4>Plastic Sequestration Criterea</h4>
						<h5>Not all plastic management is of benefit to the biosphere.  Not all attempts at sequestration achieve sequestration.</h5>
					</div>
					

					<button onclick="preclosed1()" class="block-toggle" id="block-toggle-show1">+</button>
					
				</div>

				<div id="preclosed1">
					<br>
                    <p>The Global Ecobrick Alliance, has developed five criteria for the sequestration of plastic to ensure it is of benefit to the biosphere.  In order for plastic to be considered sequestered, it must meet these criteria– and it must be independently authenticated to have done so.  These criteria are based on following the ancient example of the Earth in greening the planet’s biosphere.
                    </p>
				</div>	
			</div>

			<div class="reg-content-block" id="block2">
				<div class="opener-header">
					<div class="opener-header-text">
						<h4>Secured Concentration</h4>
						<h5>In the same way that the Earth sequestered carbon by concentrating, securing and storing it indefinitely, plastic sequestration must do the same.</h5><br>
					</div>
					<button onclick="preclosed2()" class="block-toggle" id="block-toggle-show2">+</button>
				</div>

				<div id="preclosed2">
					<div class="row">
						<div class="main2">
						<p>The Earth’s process of carbon compaction led to more and more carbon being protected from all forms of solar, chemical and organic degradation.  In the same way, by compacting our plastic we can put it into long-term, indefinite storage and contribute to the biosphere.</p>
						</div>
						<div class="side2"><img src="https://cdn.ecobricks.org/wp-content/uploads/2020/12/Plastic-Sequestration-1-500px.png" width="175px">
						</div>
					</div>

					

					<div class="row">
						<div class="main2">
						
						<p>Keeping plastic that has already been produced as plastic is an effective way to keep its carbon from getting loose.</p>
						</div>
						<div class="side2"><br><img src="https://cdn.ecobricks.org/wp-content/uploads/2020/12/Plastic-Sequestration-1-500px.png" width="175px">
						</div>
					</div>



					

					<div class="row2">
						<div class="main3">
						<br><p><b>Public Disclosure</b></p>
						
						</div>
						<div class="side3"><img src="https://s3-eu-west-1.amazonaws.com/assets.knack-eu.com/assets/5b8c28c2a1152679c209ce0c/60c86875d6dbb7001ef8ed79/original/disclosedial.png" width="150px">
						</div>
					</div>
					
					<p>However, plastic degrades quickly when it is exposed to sun, fire, oxygen and/or friction.  Its degradation is in proportion to its surface area.   As the majority of of modern plastic is in the form of thin films, when it is loose and exposed, it is prone to rapid degradation. Plastic degrades by fragmenting into smaller and smaller particles, known as micro-plastics, green house gases and toxins.</p>

                    <p>By compacting thin, high-surface area plastic, the net exposed area is reduced a thousand-fold.  The GEA has found that a reaching a density of 0.33 g/ml achieves a terminal reduction of net surface area for the majority of modern thin film plastics.  Once compacted and contained plastic is secured from degradation and can remain intact indefinitely.</p>

                    <p>To be considered plastic sequestration, the processing of plastic must achieve the minimum density of 0.33 g/ml and ensure secure, indefinite storage.</p>

                    <p>Learn more about Plastic: <a href="plastic">The Long Story</a></p>

                    <p>
				</div>
			</div>

			<div class="reg-content-block" id="block3">

				<div class="opener-header">
					
					<div class="opener-header-text">
					<h4>Cycles that Spiral</h4>
					<h5>In the same way that the Earth used its carbon in spiralling cycles, so too must plastic sequestration.</h5>
					<br>
					</div>

					<button onclick="preclosed3()" class="block-toggle" id="block-toggle-show3">+</button>
				</div>

				<div id="preclosed3">
					<br>
					<div class="row">
						<div class="main2">
						<p>The Earth made us of carbon as building blocks that could be used over and over again in the short-term.  This circularity was key to cultivating an increasingly biodiverse, stable and abundant biosphere.  Likewise, in order to be an ecological contribution, plastic sequestration must be circular by design– especially when it involves creations used in the short-term (i.e. bricks, tiles, lego, etc.) as they transition to long-term storage.</p>
						</div>
						<div class="side2"><img src="https://cdn.ecobricks.org/wp-content/uploads/2020/12/cyclical-1.png" width="100%">
						</div>
					</div>

					<div class="row2">
						<div class="main3">
						<p>Today’s single-use plastic, fuels, oils, etc. are all examples of using carbon as an ends– in a linear process.</p>
						</div>
						<div class="side3"><img src="https://cdn.ecobricks.org/wp-content/uploads/2020/12/cyclical-1.png" width="120px">
						</div>
					</div>
			

					<p>When our fuels are burned, or when our products come to an end, the leftovers don’t fit back into ecological cycles. The more we used the carbon and plastic as end-products, the more ecological cycles have been clogged.</p>

                    <p>In comparison, the Earth has used carbon as a means– in a circular process.  Carbon molecules such as nucleic acids, proteins, lipids and glycans make up all organisms– and when one organism comes to an end, another begins by building itself with the other’s blocks.  This continues indefinitely, until the carbon is subsumed into long-term sequestration.</p><br>

					<p>Putting creations into cycles of reuse is also know as circular design.  In this way, when our sequestration of plastic leads to short-term creations, they must be by circular by design– with their next life built in.</p>
                    
				</div>
			</div>



			<div class="reg-content-block" id="block4">

				<div class="opener-header">
					
					<div class="opener-header-text">
					<h4>Net-Subtractive</h4>
					<h5>Plastic Sequestration must subtract more carbon and plastic than it adds into the biosphere.</h5>
					<br>
					</div>

					<button onclick="preclosed4()" class="block-toggle" id="block-toggle-show4">+</button>
				</div>

				<div id="preclosed4">

                    <div class="row">
                            <div class="main2">
                            <p>Over the last four billion years, the net result of the Earth’s ecological processes has been the removal and storage of carbon from the biosphere.  This led over time to the stabilization of the planet’s climate and the increasing livability of the biosphere.   In the same way,  to be an ecological contribution, plastic sequestration must not add more CO2 or plastic to the biosphere than it removes.</p>
                            </div>
                            <div class="side2"><img src="https://cdn.ecobricks.org/wp-content/uploads/2020/06/Impact-Assessment-Balance-Logo-300x300.png" width="100%">
                            </div>
                        </div>

                        <div class="row2">
                            <div class="main3">
                            <p>The processing of plastic within industry (recycling, incineration, dumping, etc.) requires significant energy and transportation to move it from factory to factory around the world.</p>
                            </div>
                            <div class="side3"><img src="https://cdn.ecobricks.org/wp-content/uploads/2020/06/Impact-Assessment-Balance-Logo-300x300.png" width="120px">
                            </div>
                        </div>
					
					<p>Industrial plastic management, has also to led to a steady increase of plastic consumption and production over the last 50 years.  By marketing itself as a solution for plastic, it has encouraged the unabated consumption of plastic.  Industrial plastic processing results in the addition of plastic to the biosphere.</p>

					<p>In order for the processing of plastic to be an ecological contribution it must not add more CO2 or plastic to the biosphere.  In this way, plastic sequestration must account for its various additive (grey) and subtractive (green) ecological impacts and it must show that the net result of the process is the subtraction of plastic and CO2 from the biosphere.  Only when plastic processing is net greening can it be considered plastic sequestration.</p>

					<p>Learn more about <a href="principles">Regenerative Principles</a></p>
					<br>
			
				</div>
			</div>

            <div class="reg-content-block" id="block5">

				<div class="opener-header">
					
					<div class="opener-header-text">
					<h4>Impact Tracking & Disclosure</h4>
					<h5>In the same way that the Earth has managed its carbon to cultivate consciousness, we must do the same through our plastic sequestration.</h5>
					<br>
					</div>

					<button onclick="preclosed4()" class="block-toggle" id="block-toggle-show5">+</button>
				</div>

				<div id="preclosed5">

                    <div class="row">
                            <div class="main2">
                            <p>The Earth’s management of carbon has led to consciousness that was more and more aware of its inter-connectivity.  From single-cell, to multi-cell, to bacteria ever larger organisms (like us!), the Earth has cultivated an ever more diverse and aware biosphere.  To be an ecological contribution, the sequestration of plastic must likewise increase our individual and collective ecological consciousness.</p>
                            </div>
                            <div class="side2"><img src="https://cdn.ecobricks.org/wp-content/uploads/2020/12/eco-consciousness-500.png" width="100%">
                            </div>
                        </div>

                        <div class="row2">
                            <div class="main3">
                            <p>In the past, industrial plastic processing distanced consumers from the ecological consequences of plastic consumption.</p>
                            </div>
                            <div class="side3"><img src="https://cdn.ecobricks.org/wp-content/uploads/2020/12/eco-consciousness-500.png" width="120px">
                            </div>
                        </div>
					
					<p>Industrial  plastic management removed consumer participation and agency in the process.  Through propaganda and the long-distance export of plastics and marketing the accumulation of plastic pollution was hidden from those consuming it.</p>

					<p>In contrast, plastic sequestration must be transparent, open and accountable and spread accurate information about plastic itself.  It must involve those consuming plastic and it must involve an accounting of its ecological impacts near and far.  In so doing, it must raise awareness of plastic’s story, its dangers and its connection to petro-capital economy.</p>

					<p>Only if the processing of plastic raises  individual and collective consciousness can it be considered plastic sequestration.</p>
					<br>
			
				</div>
			</div>

            <div class="reg-content-block" id="block6">

                <div class="opener-header">
                    
                    <div class="opener-header-text">
                    <h4>Supporting of Biodiversity</h4>
                    <h5>In the same way that the Earth’s used its carbon to support biodiversity in the short-term and increased it in the long-term, so too must our process of plastic sequestration.</h5>
                    <br>
                    </div>

                    <button onclick="preclosed6()" class="block-toggle" id="block-toggle-show6">+</button>
                </div>

                <div id="preclosed6">

                    <div class="row">
                            <div class="main2">
                            <p>The Earth’s use of carbon enabled not just the building blocks of life, but also through sequestration, the stabilization of the planet’s climate so that even more life could emerge.</p>
                            </div>
                            <div class="side2"><img src="https://cdn.ecobricks.org/wp-content/uploads/2021/02/spkoski-300x249.png" width="100%">
                            </div>
                        </div>

                        <div class="row2">
                            <div class="main3">
                            <p>Likewise, the short-term use of sequestered plastic must be such that it supports life in the short term and enables biodiversity in the long-term.</p>
                            </div>
                            <div class="side3"><img src="https://cdn.ecobricks.org/wp-content/uploads/2020/12/eco-consciousness-500.png" width="120px">
                            </div>
                        </div>
                    
                    <p>When sequestration leads to short-term building blocks, these can be used in the creation of green spaces,  gardens and food-forest and the decontamination of plastic polluted areas.  Critically, the plastic blocks must be used in such a way that they do not degrade or contaminate and thus impede life.</p>

                    <p>In the long-term sequestered plastic must be entirely protected from all forms of degradation (heat, light, friction, oxygen and micro-organism) so that it also does not contaminate or leach and impact life.</p>

                    <p>In contrast industrial plastic processing relies on factories, facilities and dump sites that occupy the spaces of what were once fields and forests.  These spaces can no longer support the surrounding ecology and result in a net decrease in biodiversity.</p>

                    <p>Only if the process and its short and long-term result support of existing biodiversity and promote increases in diversity can it be considered plastic sequestration.</p>
                    <br>

                </div>
               
            </div>

            <div class="reg-content-block" id="block6">

                <div class="opener-header">
                    
                    <div class="opener-header-text">
                    <h4>For Earth Enterprise</h4>
                    <h5>In the same way that the Earth’s processes distribute benefits outwards, we must ensure that our plastic sequestration is first and foremost to benefit the Earth.</h5>
                    <br>
                    </div>

                    <button onclick="preclosed6()" class="block-toggle" id="block-toggle-show6">+</button>
                </div>

                <div id="preclosed5">

                    <div class="row">
                            <div class="main2">
                            <p>At all levels of the biosphere, we can see that its many parts contribute to the benefit of the whole.   In the way the cells of a leaf, the leaves of a tree, and the trees of a forests always work to the enrichment of the whole, the Earth’s ecosystems have steadily enriched the whole biosphere. In the same way, to be an ecological contribution, our plastic sequestration must be first and foremost for the benefit of the biosphere.</p>
                            </div>
                            <div class="side2"><img src="https://cdn.ecobricks.org/wp-content/uploads/2020/12/Bare-biosphere-1000px-1-297x300.png" width="100%">
                            </div>
                        </div>

                        <div class="row2">
                            <div class="main3">
                            <p>Industrial methods of plastic processing are driven by for-profit enterprise.</p>
                            </div>
                            <div class="side3"><img src="https://cdn.ecobricks.org/wp-content/uploads/2020/12/Bare-biosphere-1000px-1-297x300.png" width="120px">
                            </div>
                        </div>
                    
                    <p>Here, the profit of the part (the enterprise) is prioritized over the benefit of the whole (the biosphere).  When the focus of an enterprise is to recoup costs, to generate revenue and create profits for shareholders, ecological contribution comes second.   As we have seen, when enterprises prioritize profit, the result is the steady degradation of the biosphere.</p>

                    <p>While industrial systems may have the best intentions, they operate within the petro-capital economy.  As such they are constrained to its forces. Industrial methods are driven by profit to recover the recover the capital-value of plastic. Once this value is exhausted, plastic is cycled out of industry to the biosphere.</p>

                    <p>As such, the enterprise of plastic processing must be must be not-for-profit and for the biosphere’s benefit if it is to be considered plastic sequestration.</p>

                    <p>Only if the process and its short and long-term result support of existing biodiversity and promote increases in diversity can it be considered plastic sequestration.</p>
                    <br>

                </div>
            </div>

            <div class="reg-content-block" id="block7">

                <div class="opener-header">
                    
                    <div class="opener-header-text">
                    <h4>Independent Authentication</h4>
                    <h5>Plastic Sequestration must be independently validated that the above criteria have been met</h5>
                    <br>
                    </div>

                    <button onclick="preclosed6()" class="block-toggle" id="block-toggle-show6">+</button>
                </div>

                <div id="preclosed5">

                    <div class="row">
                            <div class="main2">
                            <p>The way that plastic is processed can either harm or benefit the biosphere for centuries.  The resulting mass of plastic is either of ecological value– or not. Because the stakes are high, efforts at plastic sequestration must be reviewed to make sure that standards and the criteria above are met.</p>
                            </div>
                            <div class="side2"><img src="https://cdn.ecobricks.org/wp-content/uploads/2020/12/confirmedexchange.png" width="100%">
                            </div>
                        </div>

                        <div class="row2">
                            <div class="main3">
                            <p>Through independent, not-for-profit review, set amounts of plastic can then be determined to sequestered (or not).</p>
                            </div>
                            <div class="side3"><img src="https://cdn.ecobricks.org/wp-content/uploads/2020/12/confirmedexchange.png" width="120px">
                            </div>
                        </div>
                    
                    <p>In this way, authenticated sequestered plastic can then be quantified.  Sequestered plastic can then be referred to with confidence in terms of net weight (i.e. X kg of authenticated sequestered plastic).</p>

                    <p>Just like the process of plastic sequestration itself, the process of authentication must also be not-for-profit, net-greening and driven by biosphere benefit.    Only then can the mass be considered authenticated sequestered plastic.</p>

                </div>
                </div>

                <div class="reg-content-block" id="block8">

                <div class="opener-header">
                    
                    <div class="opener-header-text">
                    <h4>CO2 Equivalency</h4>
                    <h5>Plastic Sequestration also prevents the release of CO2 from plastic degradation and industrial processing.</h5>
                    <br>
                    </div>

                    <button onclick="preclosed6()" class="block-toggle" id="block-toggle-show8">+</button>
                </div>

                <div id="preclosed8">

                    <div class="row">
                            <div class="main2">
                            <p>The 2019 report, Plastic & Climate: The Hidden Costs of a Plastic Planet concluded that <i>“the plastic pollution crisis that overwhelms our oceans is also a significant and growing threat to the Earth’s climate.”</i> The report examined the CO2 produced at various points in the life-cycle of plastic.</p>
                            </div>
                            <div class="side2"><img src="https://www.ciel.org/wp-content/uploads/2019/05/CIEL-FIG-2-Emissions-growth-summary-01.png" width="100%">
                            </div>
                        </div>

                        <div class="row2">
                            <div class="main3">
                            <p>It examined the impact of extraction and transport, refining and manufacture, waste management and plastic in the environment.</p>
                            </div>
                            <div class="side3"><img src="https://www.ciel.org/wp-content/uploads/2019/05/CIEL-FIG-2-Emissions-growth-summary-01.png" width="120px">
                            </div>
                        </div>
                    
                    <p> The report also observed that the production and incineration of plastic will add more than 850 million metric tons of greenhouse gases to the atmosphere—equal to the emissions from 189 five- hundred-megawatt coal power plants. At present rates, these greenhouse gas emissions from the plastic lifecycle threaten the ability of the global community to meet carbon emissions targets.</p>

                    <p>In this way, plastic sequestration, by keeping plastic out of industry, has a subtractive CO2 equivalency impact.</p>

                    <ul>
					<li><a href="https://gaia.org" target="_blank">Sequestered plastic won’t be incinerated and won’t release its stored carbon</a></li>
					<li><a href="https://www.ciel.org/plasticandclimate/">Sequestered plastic won’t generate more CO2 through its processing in the recycling industry</a></li>
					<li><a href="https://www.ciel.org/plasticandclimate/">Sequestered plastic won’t photodegrade releasing CO2 and other green house gases</a></li>
					<li><a href="https://www.ciel.org/plasticandclimate/">Sequestered plastic won’t degrade into 
                        micro-plastics and interfere with zoo plankton and their work sequestering carbon in the oceans</a></li>
					<li><a href="principles">Sequestration, as a by-definition, non-capital activity, represents time not spent participating in the petro-capital economy (buying, consuming, etc) and the CO2 generation.</a></li>
					<li><a href="https://medium.com/earthen">Sequestration raises ecological consciousness and encourages the lowering of plastic consumption and its associated CO2 generation</a></li>
					<li><a href="catalyst">Sequestration accelerates plastic transition and disassociation from the petrol-capital economy and its CO2 generation.</a></li>
				</ul>

                </div>
                </div>

                <div class="row">
                    <div class="main2">
                        <div class="page-paragraph">
                            <br>
                            <h4>A Safe Road into Time</h4>
                            <p>By following the criteria of plastic sequestration we are putting our plastic on a safe road through time that avoids the pittfalls of degradation and industry.  Because plastic can last for so long, its important to plan far into the future–  what we call putting plastic on a safe millennial road.</p>

                            <p>If we can do this, then the chances are it will be safe for even longer and a gift for a future age.</p> 

                        </div>	
                    </div>

                    <div class="side2">
                        <br><img src="https://www.ecobricks.org/wp-content/uploads/2020/09/Ecobrick-and-1000-year-journey-no-ecobrick.svg" width="100%"></a>
                    </div>
                </div>

                <div class="row">
                    <div class="main2">
                        <div class="page-paragraph">
                            <br>
                            <h4>Ecobricks as Plastic Sequestration</h4>
                            <p>The Global Ecobrick Alliance advocates ecobricking as a means of plastic sequestration.  The ecobricking proces raises ecological consciousness to accelereate plastic transition.  Ecobricks that meet GEA standards, have compacted plastic, secured it out of industry and out of profit enterprise to put plastic on a safe millenial road. 
                            </p>
                            <p>
                            When validated as such, the plastic inside the ecobrick is referred to as authenticated ecobrik sequestered plastic (AES Plastic).</p> 
                        </div>	
                    </div>

                    <div class="side2">
                        <br><img src="https://cdn.ecobricks.org/wp-content/uploads/2020/03/2020-Ecobrick-and-Blue-Sky-1-277x300.png" width="100%"></a>
                    </div>
                </div>

        
                  
                <div class="page-paragraph">
                    <br>
                    <h4>Is sequestration a final solution for plastic?</h4>
                    <p>In the cyclical systems of the biosphere, there’s never such thing as ‘final’.</p>

                    <p>Ecological cycles can be very short and they can be very long.   The Earth’s sequestration is an example of the latter– measured in billions of years.   By sequestering our carbon/plastic into long-term storage we’re putting it on another spin in this cycle.  In the same way the carbon was a gift to our age, we can gift our carbon to another. </p>

                    <p>Although we don’t know how it will be used, we do know that it makes a better gift for the future compacted and concentrated than scattered and loose in the biosphere.</p>
                    <p>
                </div>	
            
        </div>
	

		<div class="side">
	
			<div id="side-module-desktop-mobile">
				<img src="https://cdn.ecobricks.org/wp-content/uploads/2020/09/Ancient-Future-of-Plastic-banner-1200.png" width="90%">
				<h4>A long, long time ago...</h4>
				<h5>Plastic Sequestration follows the Earth’s example.  Learn about the ancient and modern history of plastic.</h5><br>
				<a class="module-btn" href="about">Plastic's Long Story</a>
			</div>

			<div id="side-module-desktop-mobile">
				<img src="webp/for-earth500px.webp" width="80%">
				<h4>Ayyew</h4>
				<h5>Plastic sequestration operates within the Ayyew paradigm.  This means we don’t see plastic as ‘waste’ but rather as a opportunity to move towards greater ecological harmony.</h5><br>
				<a class="module-btn" href="about">About Ayyew</a>
			</div>

			<div id="side-module-desktop-mobile">
				<img src="pngs/catalyst-logo-500px.png" width="80%">
				<h4>Ecobricks</h4>
				<h5>The GEA advocates ecobricking as a means to sequester plastic.  Only ecobricks that have been authenticated as having met sequestration criteria are considered sequestered.</h5><br>
				<a class="module-btn" href="catalyst">🚀 Learn More</a>
			</div>

            <div id="side-module-desktop-mobile">
				<img src="pngs/catalyst-logo-500px.png" width="80%">
				<h4>Earthen Ethics</h4>
				<h5>The GEA advocates ecobricking as a means to sequester plastic.  Only ecobricks that have been authenticated as having met sequestration criteria are considered sequestered.</h5><br>
				<a class="module-btn" href="catalyst">🚀 Learn More</a>
			</div>

		

		</div>

	</div>
</div>





	<!--FOOTER STARTS HERE-->


	<?php include 'footer.php'; ?>


	<!--FOOTER ENDS HERE-->

	<!-- Localise translation script-->

<script src="https://global.localizecdn.com/localize.js"></script>
<script>!function(a){if(!a.Localize){a.Localize={};for(var e=["translate","untranslate","phrase","initialize","translatePage","setLanguage","getLanguage","getSourceLanguage","detectLanguage","getAvailableLanguages","untranslatePage","bootstrap","prefetch","on","off","hideWidget","showWidget"],t=0;t<e.length;t++)a.Localize[e[t]]=function(){}}}(window);</script>

<script>
  Localize.initialize({
    key: '911e632bfc957',
    rememberLanguage: true,
  });
</script>

</div>
</body>
</html>

