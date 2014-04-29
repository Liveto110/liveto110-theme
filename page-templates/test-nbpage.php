<?php
/**
 * Template Name: Start NB Page
 *
 */
global $smof_data;
get_header(); ?>

<div id="start-nb-template" class="clearfix">
	<div class="container">
		<div class="row">
			<?php while( have_posts()) : the_post(); ?>
				<div class="col-sm-7">
					<?php
						$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'single-post' );
						$url = $thumb['0'];
					?>
					<?php if ('' != $url ) { ?>
						<a href="<?php the_permalink(); ?>">
							<img src="<?php echo $url; ?>" alt="<?php the_title(); ?>" class="img-responsive">
						</a>
					<?php } ?>
				</div>

				<div class="col-sm-5">
					<?php the_content(); ?>
				</div>
			<?php endwhile; ?>
		</div><!-- /.row -->
	</div><!-- /.container -->

	<div class="container">
		<!-- Nav tabs -->
		<ul class="nav nav-pills">
			<li class="active"><a href="#" data-toggle="pill" data-target="#nbhiw">How It Works</a></li>
			<li><a href="#" data-toggle="pill" data-target="#nbcc">Core Components</a></li>
			<li><a href="#" data-toggle="pill" data-target="#nbpricing">PRICING</a></li>
			<li><a href="#" data-toggle="pill" data-target="#nblearn">Learn</a></li>
			<li><a href="#" data-toggle="pill" data-target="#nbfaq">FAQ</a></li>	
		</ul>

		<!-- Tab panes -->
		<div class="tab-content">
			<div class="tab-pane active" id="nbhiw">
				<h1>Start a long term detox today and heal your entire body!!!</h1>
				<p>No matter how healthy you eat or take care of yourself, you CANNOT achieve true health unless you purge heavy metals and chemicals from your system. Everyone has toxic metals and chemicals embedded in their body and must actively purge them to achieve optimal health. Nutritional Balancing is the best program I've seen to detox and heal the body, which is why I became certified in this protocol and used it to heal my own health.</p>

				<strong>Hair Mineral Analysis:</strong>
				A <a href="http://www.liveto110.com/what-is-hair-mineral-analysis/">hair mineral analysis</a> reveals your body chemistry. Your custom program can then be designed to detox from these carcinogens.

				<!--more-->

				<strong>Custom Mineral Supplement Prescription:</strong>
				A <a href="http://www.liveto110.com/what-is-hair-mineral-analysis/">hair mineral analysis</a> reveals exactly what supplements and minerals you require to put your body back into balance.

				<p class="text-center">
					<iframe src="//www.youtube.com/embed/-NwD1yHznmQ" width="800" height="475" frameborder="0" allowfullscreen="allowfullscreen"></iframe>
				</p>

				<h2>How Nutritional Balancing Works</h2>
				<p><strong>Nutritional Balancing</strong> heals the body by simply giving the body what it needs nutritionally with the proper diet and supplementation. Secondly, several methods are used to detox heavy metals and chemicals interfering in the body's metabolic function. These two components increase the body's energy by healing the adrenals and thyroid, which control your body's energy and metabolism. The body has astounding regenerative powers when given the raw materials and energy it needs to remove toxins.</p>

				<p><strong>Illness develops in stages.</strong> Years of physical, emotional and biochemical stress deplete the body of nutrients, causing accumulation of toxic metals and chemicals. Adrenal and thyroid fatigue set in, decreasing the body's energy. The body becomes fatigued, immunity decreases and symptoms and disease slowly appear, eventually overwhelming the body. Nutritional Balancing slowly reverses this degenerative process. The program will do far more than symptom removal and reverse disease; it will vastly improve your vitality, mood, and mental functioning.</p>

				<strong class="text-center">Nutritional Balancing is designed to help you begin again, improve your health and vitality and LIVE TO 110.</strong>
				<div class="designedbased">Your Nutritional Balancing program is designed based upon a <a href="http://www.liveto110.com/what-is-hair-mineral-analysis/">hair mineral analysis</a>, which shows:</div>

				<div class="nbhairmineral">
					<img class="alignleft size-thumbnail wp-image-15364 img-responsive" src="http://liveto110/wp-content/uploads/2014/02/110_whatis_hairmineralanalysis1-290x193.jpg" alt="110_whatis_hairmineralanalysis">
					<ul>
						<li>Metabolic rate</li>
						<li>Mineral deficiencies</li>
						<li>Heavy metal toxicity</li>
						<li> Adrenal fatigue</li>
						<li>Thyroid function</li>
						<li>Inflammation</li>
						<li>And much more!</li>
					</ul>
				</div>
			</div><!-- /.tab-pane #nbhiw -->

			<div class="tab-pane" id="nbcc">
				<h2>Core Components of Nutritional Balancing</h2>
				<div class="row">
					<div class="col-sm-6">
						<strong>Diet</strong>
						<img src="http://liveto110/wp-content/uploads/2014/04/cutler1.png" class="img-responsive">
						<div class="cbnb">Eat the diet customized to your current metabolism – revealed on your hair mineral analysis. You will eat either the Slow Oxidizer Diet or the Fast Oxidizer Diet.</div>
					</div>

					<div class="col-sm-6">
						<aside>
							<header>Supplements</header>
							<img src="http://liveto110/wp-content/uploads/2014/04/medkit1.png" class="img-responsive">
							<div class="cbnb">Get the EXACT supplements you need tailored to your individual body chemistry. TARGETED supplementation in the amounts you need is the key to healing your body.</div>
						</aside>
					</div>

					<div class="col-sm-6">
						<aside>
							<header>Detox</header>
							<img src="http://liveto110/wp-content/uploads/2014/04/bug1.png" class="img-responsive">
							<div class="cbnb2">If you plan to live to 110 you must have a long-term life long detox strategy. This program utilizes Infrared Saunas and Coffee Enemas, proven to be safe and effective.</div>
						</aside>
					</div>

					<div class="col-sm-6">
						<aside>
							<header>Lifestyle</header>
							<img src="http://liveto110/wp-content/uploads/2014/04/puzzle1.png" class="img-responsive">
							<div class="cbnb2">Rest. Sleep. Meditate. Minimal Exercise. These components are crucial to relax your body so you can heal and detox.</div>
						</aside>
					</div>
				</div><!-- /.row -->
			</div><!-- /.tab-pane #nbcc -->

			<div class="tab-pane" id="nbpricing">
				<div class="row">
					<div class="col-sm-6">
						<strong>Hair Mineral Analysis</strong>
						<span>$300</span>
						Increase Metabolism
						Correct Nutrient Deficiencies
						Detox
						Heavy Metals and Chemicals
						<a class="btn btn-success btn-lg" href="#">Get Started!</a>
					</div>

					<div class="col-sm-6">
						<h2 class="text-center">What You Get!</h2>
						<ul>
							<li>&gt; 1.5 hours of health coaching</li>
							<li>&gt; Interpretation of your hair mineral analysis</li>
							<li>&gt; 17-page interpretive report of your hair mineral analysis</li>
							<li>&gt; Diet recommendations</li>
							<li>&gt; Customized supplement recommendations</li>
							<li>&gt; Lifestyle recommendations</li>
							<li>&gt; Unlimited email support until your next hair test</li>
						</ul>
					</div>
				</div><!-- /.row -->
			</div><!-- /.tab-pane #nbpricing -->

			<div class="tab-pane" id="nblearn">
				<h2>Learn About Nutritional Balancing</h2>
				<div class="row">
					<div class="col-sm-6">
						<h3>Articles</h3>
						<a href="http://www.liveto110.com/nutritional-balancing-with-hair-mineral-analysis">Nutritional Balancing with Hair Mineral Analysis</a>
						<a href="http://www.liveto110.com/overview-of-a-nutritional-balancing-program">Overview of a Nutritional Balancing Program</a>
						<a href="http://www.liveto110.com/?s=dear+detox+diary">Dear Detox Diary Series</a> (all my hair tests)
						<a href="http://www.liveto110.com/near-infrared-saunas-kill-cancer/">Near Infrared Saunas Kill Cancer</a>
						<a href="http://www.liveto110.com/infrared-saunas/">Infrared Saunas</a>
						<a href="http://www.liveto110.com/coffee-enemas/">Coffee Enemas</a>
						<a href="http://www.liveto110.com/epidemic-adrenal-fatigue/">Adrenal Fatigue</a>
						<a href="http://www.liveto110.com/meet-your-thyroid-a-cause-of-weight-gain/">Meet Your Thyroid</a>
						<a href="http://www.liveto110.com/copper-toxicity-syndrome/">Copper Toxicity Syndrome</a>
						<a href="http://www.liveto110.com/everyone-is-mercury-toxic/">Everyone is Mercury Toxic</a>
						<a href="http://www.liveto110.com/endomet-supplements/ ">Endomet Supplements used on NB programs</a>
						<a href="http://www.liveto110.com/guide-sources-symptoms-toxic-metals/">Guide to Sources and Symptoms of Toxic Metals</a>
						<a href="http://www.liveto110.com/what-is-hair-mineral-analysis/">What is Hair Mineral Analysis?</a>
					</div>

					<div class="col-sm-6">
						<h3>Podcasts</h3>
						<a href="http://www.liveto110.com/2-nutritional-balancing-with-hair-mineral-analysis-with-nikki-moses/">Nutritional Balancing with Hair Mineral Analysis with Nikki Moses</a>
						<a href="http://www.liveto110.com/11-which-healing-and-detox-methods-are-best-ineffective-dangerous-with-dr-lawrence-wilson/">Best Healing and Detox Methods with Dr. L Wilson</a>
						<a href="http://www.liveto110.com/6-get-rid-of-fatigue-and-brain-fog-with-dr-lawrence-wilson/">Get Rid of Fatigue and Brain Fog with Dr. L Wilson</a>
						<a href="http://www.liveto110.com/heal-your-thyroid-with-nutritional-balancing-with-luke-pryor">Heal Your Thyroid with Nutritional Balancing with Luke Pryor</a>
						<a href="http://www.liveto110.com/heal-diabetes-naturally-nutritional-balancing-kristen-harper/">Heal Diabetes Naturally with Nutritional Balancing with Kristen Harper</a>
						<a href="http://www.liveto110.com/everything-you-never-wanted-to-know-about-coffee-enemas-with-nikki-moses/">Coffee Enemas with Nikki Moses</a>
						<a href="http://www.liveto110.com/infrared-saunas-in-depth-with-nikki-moses">Infrared Saunas with Nikki Moses</a>
						<a href="http://www.liveto110.com/general-leigh-gets-her-hair-mineral-analysis-results-2/">Leigh Lowery Gets Her Hair Test Results</a>
						<a href="http://www.liveto110.com/near-infrared-saunas-heal-disease-with-michael-goldstein/">Infrared Saunas Heal Disease with Michael Goldstein</a>
					</div>
				</div><!-- /.row -->
			</div><!-- /.tab-pane #nblearn -->

			<div class="tab-pane" id="nbfaq">
				<h3>Dr Lawrence Wilson's Website</h3>
				<a href="http://www.Drlwilson.com/">Drlwilson.com</a><span> -  Read a few of the 950 articles on his site that pertain to your symptoms and health conditions.</span>

				<h2>FAQ</h2>
				<div class="panel-group" id="nbfaq-accordion">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">
								<a data-toggle="collapse" data-parent="#nbfaq-accordion" href="#collapseOne">
									After I buy a hair mineral analysis, what are the next steps?
								</a>
							</h4>
						</div>
						<div id="collapseOne" class="panel-collapse collapse">
							<div class="panel-body">
								<img class="alignleft size-full wp-image-15271 img-responsive" src="http://liveto110/wp-content/uploads/2014/04/11.png" alt="1" width="30">
								<div class="nbacc">
									<b>I will send you a Hair Sampling Kit</b>
									<a href="http://www.liveto110.com/how-to-cut-a-hair-sample">How to Cut a Hair Sample</a>
								</div>

								<img class="alignleft size-full wp-image-15272" src="http://liveto110/wp-content/uploads/2014/04/21.png" alt="2" width="30" height="30" />
								<div class="nbacc">
									<b>Order the basic supplements - </b>
									Anxious to get started? Order the <a href="http://www.liveto110.com/product/core-nutritional-balancing-kit/">Core Nutritional Balancing Supplement Kit</a>. Everyone on a Nutritional balancing program takes these basic supplements. The amounts and other customized supplements are determined by your hair test results. OR you can wait to order all the supplements upon getting your hair mineral analysis results.
								</div>

								<img class="alignleft size-full wp-image-15273" src="http://liveto110/wp-content/uploads/2014/04/31.png" alt="3" width="30" height="30" />
								<div class="nbacc">
									<b>Start the Diet - </b>You can start your program today! Simply start the diet we recommend on Nutritional Balancing. Most people are shown on their hair tests to have slow oxidization (metabolism) and need the Slow Oxidizer Diet.  The only difference between the two diets is the slow oxidizer diet has less fat – people with slow oxidation don't burn fat as efficiently for fuel.
								</div>

								<div class="nbdiet">
									<a href="http://www.liveto110.com/slow-oxidizer-diet">Slow oxidizer Diet</a> - generally, for those with a slow metabolism that tend to gain weight easily, i.e. most people over 30 or the very ill.
								</div>

								<div class="nbdiet">
									<a href="http://www.liveto110.com/the-fast-oxidizer-eating-plan">Fast oxidizer Diet</a> - generally, for those with a fast metabolism that can typically eat what they want and not gain weight, i.e. young men and children.
								</div>
							</div>
						</div>
					</div>

					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">
								<a data-toggle="collapse" data-parent="#nbfaq-accordion" href="#collapseTwo">
									How Long does it take to get my Hair test results?
								</a>
							</h4>
						</div>
						<div id="collapseTwo" class="panel-collapse collapse">
							<div class="panel-body">
								Once ARL receives your hair sample, it takes about 1 week to get your results. I email your hair mineral analysis graph as soon as I receive them. Dr. Lawrence Wilson, the medical doctor that oversees the program (more info below) looks at each and every hair test and makes your supplement recommendations. This takes a few days. Once I have his recommendations, then we will make an appointment to review your results. The whole process takes about 2 weeks.
							</div>
						</div>
					</div>

					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">
								<a data-toggle="collapse" data-parent="#nbfaq-accordion" href="#collapseThree">
									Who needs a hair mineral analysis?
								</a>
							</h4>
						</div>
						<div id="collapseThree" class="">
							<div class="">
								Anyone who is ill and no explanation can be found, or when the cause seems to be found but the therapy is not completely effective. Subclinical ailments like fatigue, brain fog and sleep issues are easily resolved on this program. Hair analysis opens up a whole new vista for  resolving health issues where modern Western medicine falls short. Nutritional Balancing addresses the root causes of physical and mental health issues and provides a plan to resolve these underlying causes, which are nutrient deficiencies and heavy metal and chemical toxicity. The reason so many health issues are not resolved with traditional medical care is because these issues are rarely addressed. For those seeking higher levels of health, hair analysis can be used as a preventative tool by revealing mineral imbalances even before any health ailments manifest. Imbalances in the body exist years before symptoms appear.
							</div>
						</div>
					</div>

					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">
								<a data-toggle="collapse" data-parent="#nbfaq-accordion" href="#collapseFour">
									How long does it take to see improvement?
								</a>
							</h4>
						</div>
						<div id="collapseFour" class="panel-collapse collapse">
							<div class="">
								This depends on the person. Many feel more energy and have better sleep as soon as they start the supplements. Others need a week or two to adjust to the supplements. Still others will have a lot of detoxing to do and have a period where they feel worse for a time before they feel better. In all, most people slowly but steadily begin to feel better over the first few months on the program. Generally, the more ill a person is when they begin the program, the longer it will take them to feel better – it could take a year or more. One must be realistic that the body takes time to heal and feel better.
							</div>
						</div>
					</div>

					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">
								<a data-toggle="collapse" data-parent="#nbfaq-accordion" href="#collapseFive">
									How long does it take to get better?
								</a>
							</h4>
						</div>
						<div id="collapseFive" class="panel-collapse collapse">
							<div class="">
								One removes the bulk of heavy metals in 2-3 years. When the majority of metals are out of the body most people's health issues and symptoms have subsided. Some people need to remain on a nutritional balancing program a few more years if they are very ill and toxic. It takes time to replenish nutrients, remove toxins from the body and correct imbalances in the body. One could even choose to remain on the program for a decade or more to obtain vibrant health beyond just the removal of heavy metals. Something very profound occurs on this program if one stays on the program for several years or ore. It's what we call Spiritual Development, which is an increase in the number of neurons in the brain (resulting in an increase in brain usage and power), the expansion of our chakras and the development of a profound sense of spirituality that is difficult to explain. It simply occurs on this program as time unfolds.
					</div>

					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">
								<a data-toggle="collapse" data-parent="#nbfaq-accordion" href="#collapseSix">
									How often do I need to do retests?
								</a>
							</h4>
						</div>
						<div id="collapseSix" class="panel-collapse collapse">
							<div class="">
								Retests are recommended every 3-4 months to check the progress of your health and well-being. As your body chemistry changes, the diet and supplement program should be adjusted to meet your current needs. Each retest reveals a new layer of imbalances that need to be addressed. Retesting is the only way to determine if a nutritional balancing program is still appropriate and correct for a person. If a retest is postponed, your program will no longer properly balance your body chemistry and your progress will cease. Additionally, if you wait too long to retest, you will miss metals dumping into the hair as each hair test only shows a three month average of heavy metals and minerals in the hair.
					</div>

					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">
								<a data-toggle="collapse" data-parent="#nbfaq-accordion" href="#collapseSeven">
									What can a hair mineral analysis reveal?
								</a>
							</h4>
						</div>
						<div id="collapseSeven" class="panel-collapse collapse">
							<div class="">
								• Oxidation Type, aka Metabolic Rate
						• Stage of Stress and your stress response patterns
						• Mineral Imbalances
						• Heavy Metal Toxicity
						• Liver and Kidney Stress
						• Nervous System Imbalances
						• Carbohydrate Tolerance
						• Protein Synthesis
						• Adrenal and Thyroid Activity
						• Immune System Health
						• Inflammation
						• Energy Levels
						• Personality, Awareness, and even information about your Chakras.
						• Trends for Physical, Mental, and Emotional Health Conditions
					</div>

					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">
								<a data-toggle="collapse" data-parent="#nbfaq-accordion" href="#collapseEight">
									What causes mineral imbalances?
								</a>
							</h4>
						</div>
						<div id="collapseEight" class="panel-collapse collapse">
							<div class="">
								<ul>
							<li>Stress.  It can actually deplete minerals from the body.</li>
							<li>Toxic Metals  and Chemicals.  They can replace minerals in enzyme binding sites and interfere with mineral absorption.</li>
							<li>Nutritionally Depleted &amp; Toxic Food Supply.  Our food and soils are depleted of minerals which is why everyone needs nutritional supplements.  Hybrid crops are being grown that are deficient in minerals.  Superphosphate fertilizers (i.e. Miracle Grow) are being used that lack trace minerals.  Foods such as table salt, white sugar and white flour have gone through the refining process and minerals have been taken out and rob minerals from the body to digest them.  Pasteurized dairy damages the bioavailability of calcium.  Pesticides are being sprayed on our foods that are extremely toxic and will damage the soil microorganisms which make minerals available to the plants.  Additionally, most foods are full of chemicals, additives, and preservatives that are toxic to the body. Vegetarian and vegan diets can cause mineral imbalances and nutrient deficiencies.</li>
							<li>Improper drinking water. Tap water, even with a filter, is not safe due to added chlorine, aluminum, and copper.  There are other types of water that do not hydrate the body enough such as reverse osmosis. The only type of water we recommend in nutritional balancing is spring water because it hydrates the body the best and contains minerals.</li>
							<li>Medications, Birth Control Pills, Vaccinations, and more.  These are all toxic to the body.</li>
							<li>Taking minerals and vitamins which are not compatible with your body chemistry.  Many people will take nutritional supplements without having a test done prior to determine what exactly your body needs.  This is a common mistake and can cause further mineral imbalances. Additionally, most do not take nearly enough minerals as they are very bulky.</li>
							<li>Unhealthy lifestyles and eating habits.  Many individuals do not get enough sleep and go to bed too late.  In nutritional balancing, we suggest you sleep a minimum of 8-9 hours each night and go to bed no later than 9 or 10 p.m.</li>
							<li>Congenital deficiencies. Most babies are born today with low trace minerals due to mothers being mineral deficient.</li>
							<li>Improper Digestion.  Many people have poor digestion due to intestinal infections, stress, improper food preparation, and improper eating habits, which will prevent mineral absorption. Many people do not eat properly which will prevent mineral absorption.  It is recommend you eat slowly and in a quiet setting with no distractions.</li>
							<li>Parasitic infections. These impair mineral absorption.  We suggest you eat mostly cooked food at home to reduce parasites. The program kills  hundreds of parasites in many different ways.</li>
							<li>Emotions such as anger, fear, and more.</li>
						</ul>
					</div>

					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">
								<a data-toggle="collapse" data-parent="#nbfaq-accordion" href="#collapseNine">
									What is retracing?"
								</a>
							</h4>
						</div>
						<div id="collapseNine" class="panel-collapse collapse">
							<div class="">
								After 3 - 4 months, a retest will reveal a deeper level of your metabolism.  Many times, it will look totally different from the previous test if this healing program was followed.  We then address the deeper layers and continue uncovering and reversing ever deeper layers of adaptations and compensations your body has been forced to make given stresses like nutrient deficiencies and toxicity.  This is called retracing.  It is the only way I know of to really address deeper causes of illness and slowly reverse them. An example can be explained with a sinus infection you had a couple years ago. That infection is likely still in your body. When you are on a Nutritional Balancing program for some time, eventually the body will gain the energy it needs to address this infection and rid the body of it once and for all. When the body is removing this infection you will have a flare up of the sinus infection, what is termed a healing reaction.
					</div>

					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">
								<a data-toggle="collapse" data-parent="#nbfaq-accordion" href="#collapseTen">
									What are healing or detox reactions?
								</a>
							</h4>
						</div>
						<div id="collapseTen" class="panel-collapse collapse">
							<div class="">
								Healing reactions are temporary flare-ups of health ailments that occur as toxic metals, toxic chemicals and infections are eliminated from the body. They cause physical or mental symptoms such as sore throats, colds, anxiety, fatigue or other usually minor symptoms. These reactions are welcome evidence of healing. Please call or e-mail me if any healing reactions occur so I can tell you how to most effectively deal with them.
					</div>

					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">
								<a data-toggle="collapse" data-parent="#nbfaq-accordion" href="#collapseEleven">
									How does Nutritional Balancing heal the body in ways that medicine, naturopathy and other therapies cannot?
								</a>
							</h4>
						</div>
						<div id="collapseEleven" class="panel-collapse collapse">
							<div class="">
								<ul>
							<li>Whole Systems Thinking – Nutritional Balancing views the body as one complex, self-regulating, whole system rather than the current medical paradigm, which often views our bodies as a collection of somewhat unrelated parts. If medical tests reveal low thyroid function, you'll often be treated only for thyroid issues, when the issue involves many different systems in the body, including the adrenals, the hypothalamus, pituitary gland, nutrient deficiencies, heavy metal toxicity and much more. The entire body must be healed and balanced. "Treating" one body part is frankly a ridiculous, outdated notion.</li>

							<li>A Strong Focus on the Newer Causes of Illness – Conventional Medicine and most holistic care often ignore or worsen the major health challenges of this century which include: a mineral deficient and at times extremely toxic food supply; diets of refined and often chemical-laden foods, unhealthtful lifestyles and eating habits; levels of toxic metals and toxic chemicals in the air and water that are up 1000 times higher than ever before in recorded history; dozens of viral and bacterial infections that respond poorly to medical drugs; high levels of ionizing radiation and electromagnetic pollution and more. Nutritional Balancing addresses these newer causes of illness.</li>

							<li>Wellness-Based Rather than Illness-Based – The current allopathic model believes that health is the absence of finding a health condition. To assess health, tests are run to find health conditions. If none are found, a person is generally pronounced healthy. This model is seriously flawed; many people who do not feel well are sent home and told there is nothing wrong. Conventional Medicine offers artificial health in which people may look healthy and are labeled healthy, however they require the constant assistance of medical exams, tests, procedures, remedies and surgeries because they are prone to hundreds of medical problems. Nutritional Balancing focuses on the wellness model of health care which is a “state of high resistance to all illness.” Nutritional Balancing can easily move a person from a state of artificial health to a state of high resistance to most all health conditions by focusing on a healthy diet, proper drinking water, rest and sleep, nutritional supplements, detoxification to remove toxins from the body and more.</li>

							<li>Thoroughly Preventive and Predictive Focus – The present medical system is not interested in prevention or wellness. Nutritional Balancing is all about primary prevention – the complete avoidance of all illness. Conventional Medicine uses blood tests and x-rays for detecting health conditions. Subtle stress is not apparent in the blood because minerals are kept in balance, while the tissues suffer. By the time imbalances are found in the blood, often it is too late in the development of a health condition and far more difficult to treat, if treatment is even possible. Hair analysis can identify the beginnings of health conditions often many years in advance of other methods. The imbalances can then be corrected, completely preventing the development of the illness.</li>

							<li>An Ability to Correct Many Latent or Sub-Clinical Health Conditions at Deep Levels – Conventional Medicine cannot correct latent (unseen or unfelt conditions) or sub-clinical stages of cancer, diabetes, heart disease, arthritis and other conditions because this system must wait until the patient manifests symptoms before receiving tests. Nutritional Balancing can correct most latent and sub-clinical health conditions, including emotional imbalances.</li>

							<li>Low Cost – Drug-based medical care is very expensive because a sick population results from to a medical system that does not heal people but rather covers up their symptoms with medications; toxicity of drugs, radiation, and surgery causes more sickness and disability; high legal costs including malpractice encourage the use of defensive medicine; and lastly, a cartel or small group of organizations (Big Pharma) run the system from medical education to practice purposely increasing costs for profit. Nutritional Balancing is low cost due to the fact that is prevents most medical expenses due to prevention and healing of the body; hair analysis is a low cost assessment tool; and Nutritional Balancing recommends relatively inexpensive supplements and natural products.</li>

							<li>An Integration of Mind and Body, Rather than Separating them – The current medical paradigm separates health conditions of the mind from those of the body. A different set of professionals specialize in each. Nutritional Balancing integrates the mind and body because we recognize that all nutritional imbalances affect the body and the brain. Toxic metals and infections affect the body and the brain. Nutritional Balancing offers exciting new ways to correct mental illnesses by healing the underlying causes of autism, ADD, ADHD, anxiety, depression bipolar disorder and more without the use of drugs.</li>
						</ul>
					</div>

					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">
								<a data-toggle="collapse" data-parent="#nbfaq-accordion" href="#collapseTwelve">
									Can Nutritional Balancing help me get off medication?
								</a>
							</h4>
						</div>
						<div id="collapseTwelve" class="panel-collapse collapse">
							<div class="">
								Yes! Our goal is to reduce your need for medication. As Nutritional Balancing heals the body, many find they can reduce or even completely get off all medication. We do not recommend stopping or reducing any medications without first consulting your physician. Stopping medication too soon or too rapidly can be dangerous.
					</div>

					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">
								<a data-toggle="collapse" data-parent="#nbfaq-accordion" href="#collapseThirteen">
									How is hair mineral analysis from ARL different from other labs?
								</a>
							</h4>
						</div>
						<div id="collapseThirteen" class="panel-collapse collapse">
							<div class="">
								Mineral levels and ratios as determined by Analytical Research Labs for each individual are measured against an ‘ideal’ standard of health rather than an ‘average’ standard as used by other laboratories. This renders Analytical Research Labs’ results more sensitive and meaningful to those people who aspire to optimum levels of health. The laboratory works with precise mineral levels and ratios rather than with the broad ranges employed by the majority of professionals engaged in hair analysis. As a result, the laboratory identifies even slight deviations from ‘ideal’ values responsible for some disorders which would escape detection by other labs. Dr. Paul C. Eck established ARL in 1974 after devoting most of his adult life to evaluating major research studies in biochemistry, physiology, pathology, nutrition and psychology. To correctly interpret a tissue mineral analysis, Dr. Eck combined a number of modern biological, physiological and biochemical concepts including the stages of stress discovered by Dr. Hans Selye, sympathetic and parasympathetic balancing as taught by Dr. Melvin Page, oxidation types as taught by Dr. George Watson and mineral balancing as taught by Dr. William Albrecht and others. No other laboratory uses all these concepts to help understand the significance of tissue mineral levels, ratios and metabolic patterns! Dr. Eck pioneered many innovations in the study of trace mineral deficiencies and excesses and their relationship to various metabolic dysfunctions associated with illness. Dr. Eck was regarded as an authority on the science of balancing body chemistry through hair tissue mineral analysis. Analytical Research Labs was the first laboratory to integrate the factors of stress, oxidation types, mineral relationships, homeostatic states and natural healing principles into the science of hair tissue mineral analysis interpretation. ARL was the first hair tissue mineral analysis laboratory to recognize the importance of hair mineral ratios. As a result, our interpretations focus on mineral relationships and their effects on health. Analytical Research Labs was the first laboratory to determine oxidation rates using hair tissue mineral analysis and to identify/correlate more than 30 metabolic trends for illnesses using hair tissue mineral analysis. ARL was the first laboratory to produce interpretations that measure mineral levels and ratios against an ideal standard of health rather than an average range used by other laboratories within the field of hair tissue mineral analysis. We highly recommend this laboratory over others because they do not wash hair samples! Beware of other laboratories that wash hair samples. Washing the hair with harsh solvents or alcohol washes away water soluble minerals, rendering the tests invalid.
					</div>

					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">
								<a data-toggle="collapse" data-parent="#nbfaq-accordion" href="#collapseFourteen">
									Why is Nutritional Balancing so effective at detoxing heavy metals?
								</a>
							</h4>
						</div>
						<div id="collapseFourteen" class="panel-collapse collapse">
							<div class="">
								Nutritional balancing utilizes over 35 different methods at once to remove ALL toxic metals safely and deeply.  In most instances, it is faster and more thorough than either intravenous or any other type of chelation therapy, synthetic or natural.  It is also more safely and deeply removes more metals than chelation of any kind.
						<br>
						<strong>List of 35 methods.</strong>
					</div>

					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">
								<a data-toggle="collapse" data-parent="#nbfaq-accordion" href="#collapseFifteen">
									Why not just detox from heavy metals using chelation?
								</a>
							</h4>
						</div>
						<div id="collapseFifteen" class="panel-collapse collapse">
							<div class="">
								...
					</div>

					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">
								<a data-toggle="collapse" data-parent="#nbfaq-accordion" href="#collapseSixteen">
									My hair test shows no or very low heavy metals. Do I need to do this program?
								</a>
							</h4>
						</div>
						<div id="collapseSixteen" class="panel-collapse collapse">
							<div class="">
								Everyone has toxic metals in their body with no exception, the question is to what degree. If your hair test does not reveal any metals this is solely because your body does not have the energy to remove them from the body and dump them into the body and hair for elimination. As you embark on a Nutritional Balancing program and begin to detox, subsequent hair tests will show all the metals eventually coming out in the hair. This will not happen unless you are doing an active detox program.
					</div>

					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">
								<a data-toggle="collapse" data-parent="#nbfaq-accordion" href="#collapseSeventeen">
									How do heavy metals cause disease?
								</a>
							</h4>
						</div>
						<div id="collapseSeventeen" class="panel-collapse collapse">
							<div class="">
								Toxic metals including lead, mercury, cadmium, arsenic, aluminum and nickel replace nutrient minerals in enzyme binding sites. When this occurs, the metals inhibit, overstimulate or otherwise alter thousands of enzymes. An affected enzyme may operate at 5% of normal activity. This may contribute to many health conditions. Toxic metals may also replace other substances in other tissue structures. These tissues, such as the arteries, joints, bones and muscles, are weakened by the replacement process. Toxic metals may also simply deposit in many sites, causing local irritation and other toxic effects. Metals, especially mercury and copper, support development of fungal, bacterial and viral infections that are difficult or impossible to eradicate until heavy metals are removed.

						Presently, humanity is exposed to the highest levels of toxic metals in recorded history, up to several thousand times higher than even several hundred years ago due to industrialization. Many health conditions are simply heavy metal toxicity and can contribute to any imaginable health ailment or condition including cases of diabetes, cancer, multiple sclerosis, Parkinson’s disease, and others. Additionally, hair analysis can reveal copper toxicity and the three amigos (aluminum, manganese, and iron). Copper toxicity is one of the most commonly encountered imbalances that we find on hair tests and is a contributor to many health problems including anorexia, fatigue, premenstrual syndrome, depression, anxiety, migraine headaches, allergies, childhood hyperactivity and learning disorders. Iron toxicity is associated with inflammation, diabetes, hypoglycemia, prostate disorders, cancers, feelings of anger and rage, and infections. Manganese toxicity ailments include irritability, anxiety, emotional detachment, diabetes, cancer, and even criminality and psychopathic or sociopathic behavior. The danger of toxic metals in our environment is greatly aggravated due to low mineral content of our food supply and contamination of our food supply. If one does not consume preferred minerals in the diet, the body will pick up whatever toxic metals from the food, air, and water as substitutes. A key principle to remember is an abundance of essential minerals in the diet protects the body against toxic metals.
					</div>

					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">
								<a data-toggle="collapse" data-parent="#nbfaq-accordion" href="#collapseEighteen">
									Who is Dr. Lawrence Wilson?
								</a>
							</h4>
						</div>
						<div id="collapseEighteen" class="panel-collapse collapse">
							<div class="">
								Dr. Lawrence Wilson is the world's leading expert on Nutritional Balancing. He personally oversees all the Nutritional Balancing practitioners around the world. Dr. Wilson looks at and evaluates each and every hair test on this program – including yours. After careful consideration of your hair mineral analysis, medications and health conditions, he makes your supplement and program recommendations. Dr. Wilson has a medical degree, but works as a nutrition consultant only. For over thirty years, he has treated 50,000 patients using Nutritional Balancing Science, though he no longer personally consults with patients. He learned this program from Dr. Paul Eck, a brilliant biochemist who developed Nutritional Balancing Science and founded Analytical Research Laboratories and Endomet Supplements.
					</div>

					<div class="panel pabel-default">
						<div class="panel-heading">
							<h4 class="panel-title">
								<a data-toggle="collapse" data-parent="#nbfaq-accordion" href="#collapseNineteen">
									What Supplements are used with this program?
								</a>
							</h4>
						</div>
						<div id="collapseNineteen" class="panel-collapse collapse">
							<div class="">
								Endomet Supplements are used on a Nutritional Balancing program. These supplements were designed specifically by Dr. Paul Eck, the developer of Nutritional Balancing Science, for the purposes of balancing body chemistry. They are very high quality supplements that I have taken myself for years. <a href="http://www.liveto110.com/endomet-supplements/">Learn more</a> about Endomet Supplements.
					</div>

					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">
								<a data-toggle="collapse" data-parent="#nbfaq-accordion" href="#collapseTwenty">
									What is Nutritional Balancing Science?
								</a>
							</h4>
						</div>
						<div id="collapseTwenty" class="panel-collapse collapse">
							<div class="">
								<p>Nutritional Balancing science is holistic in the sense that it is not about diagnosing or treating any particular disease but utilizes hair mineral testing to design nutrition, supplement and lifestyle programs to improve the body’s energy level, reduce stress, rest the sympathetic nervous system and balance the oxidation rate of the body. Nutritional balancing is at its holistic best when treating toxic metals and hundreds of toxic chemicals because it relies on the body’s wisdom knowing the ideal order and timing for eliminating toxins, versus chasing after toxic metals and chemicals through the use of EDTA, DMPS, DMSA and other yin synthetic chelators.</p>

							<p>21 minerals and toxic metals are accurately identified through hair mineral testing and the results reveal significant mineral levels and ratios and provides pertinent information related to the persons metabolic rate, energy levels, sugar and carbohydrate tolerance, immune system, glandular activity, autonomic balance, and metabolic trends. Everyone’s body is operating in a unique mineral and toxic environment that dictates how their body organs and systems will function or malfunction, and how their body will accumulate toxins or be somewhat naturally protected from accumulation.</p>

							<p>Correction of a person’s body chemistry involves taking supplements that have been mathematically calculated and recommended by hair analysis to replace preferred minerals in enzyme binding sites to restore full enzyme activity, and balance the adrenal and thyroid glands so toxic metals and contaminants used as catalyst’s can be mobilized and excreted from the body.</p>

							<p>Nutritional Balancing science makes the person healthier so the body can overcome disease by itself. It moves the person from "artificial health" that requires constant medical tests, procedures, medications and surgeries, to "natural health" where the body starts functioning normally with preferred minerals in millions of enzyme binding sites, and has a state of high resistance to all disease.</p>

							<p>Wellness Shopping Online sells Endo-met Supplements based on Analytical Research Laboratories, Inc. (ARL) Tissue Mineral Hair Analysis results and recommendations, and Eileen Durfee works with Dr. Lawrence Wilson and Associates so your Nutritional Balancing Program can be customized to your lifestyle and symptomology.</p>

							<p>It was shown that contaminants absorbed by inhalation, ingestion, and/or dermal exposure, such as: Asbestos, radionuclides, benzene, dioxins, polychlorinated biphenyls (PCBs), fiberglass, mercury, lead, silicon, sulfuric acid – agents associated with cancer as well as severe lung pathology, neurological and cardiovascular disease, and a myriad of immune dysfunctions; have been mobilized and excreted from the bodies of workers and soldiers through intensive sauna and mineral therapy[1].</p>

							<p>With the Nutritional Balancing Science developed by Dr. Paul C. Eck and expanded by Dr. Lawrence Wilson, M.D. over a dozen methods are used in a coordinated fashion at the same time to detoxify the body.</p>

							<p>Nutritional Balancing Includes:</p>
							<ol>
								<li>
									<strong>Tissue Mineral Hair Analysis and Diet Program:</strong>

									<p>Increase the body’s adaptive energy by balancing the oxidation rate and the major mineral levels and ratios though Laboratory testing, recommended Endo-met supplementation and diet changes. Much more energy is available for detoxification and healing, which is the key difference between this program and symptomatic approaches to detoxification.</p>

									<ul>
										<li>Endo-met supplementation contains antagonists that oppose or compete with toxic substances,</li>
										<li>Endo-met supplementation contains chelators, a special type of antagonists that dislodge toxic metals and escort toxic metals out of the body or facilitate the removal of toxic metals,</li>
										<li>Endo-met supplementation provides preferred minerals so the body replaces toxic minerals restoring the body’s enzyme systems,</li>
										<li>Endo-met supplementation supports the digestion and elimination systems of the body, and weakens intestinal parasites that produce toxic substances in the intestines,</li>
										<li>Eat at least three regular meals every day, however, some people should eat four or five smaller meals to balance their blood sugar and prevent stress on the adrenal gland,</li>
										<li>Eat slowly and chew each mouthful of food at least five or more times,</li>
									</ul>
								</li>

								<li>
									<strong>Adequate Sleep and Rest:</strong>

									<p>The single most important lifestyle change is to sleep and rest so your body can regenerate and focus on healing, which takes energy.</p>

									<ul>
										<li>Sleep at least 8 or more hours every single day, and take 15 minute naps or sleep for an hour in the afternoon,</li>
										<li>Go to bed ideally between 8 and 9 PM, as the natural sleep cycle is from sundown to sunup,</li>
									</ul>
								</li>

								<li>
									<strong>Drinking Enough Clean Water:</strong>

									<p>The second most important change for adults is to drink 3 or more quarts of pure spring water daily, which can speed up the healing process; and initially drink distilled water for the first 3 months of a nutritional balancing program.</p>
							</li>

							<li>
								<strong>Avoid Toxic Exposures whenever possible:</strong>

								<p>Environmental toxins come in many forms and can contribute to any imaginable symptom or illness. Toxic metals slowly deactivate enzyme systems, weaken body structures and have other degenerative effects. As more of the toxic metals accumulate, digestion and absorption of the essential minerals worsens, which causes the body to accumulate more toxic metals and the body begins to lose the ability to eliminate toxic metals; which can result in death. Potential sources of contamination:</p>

								<ul>
									<li>Household cleaning chemicals,</li>
									<li>Landscape maintenance herbicides and pesticides,</li>
									<li>Beauty products such as soaps, conditioners, make-up, lotions,</li>
									<li> Over the counter medications,</li>
									<li>Prescription medications,</li>
									<li>Dental toxins,</li>
									<li>Automotive oils, solvents and chemicals,</li>
									<li>Airborne exposures, and</li>
									<li>Contact exposures</li>
								</ul>
							</li>

							<li>
								<strong>Remove the need for physical and emotional compensations:</strong>

								<p>When you are physically and emotionally drained many toxins act as compensatory mechanisms in the body; like the “three amigos” – iron, manganese and aluminum, all in bio unavailable form – that appear to boost adrenal and perhaps thyroid activity in most slow oxidizers. When you rest your physical body and stabilize your emotions, the need for the “three amigos” is removed and it appears to allow toxic metals and some other chemicals to be removed quickly and easily from the body. Removing the need also helps prevent toxic metals from re-accumulating in the body.</p>
							</li>

							<li>
								<strong>Balance the qualities of Yin and Yang:</strong>

								<p>Balancing these subtle qualities strengthens the body and increases the available adaptive energy.</p>

								<ul>
									<li>Detoxification methods are either more yin or more yang in nature,</li>
									<li> Most bodies are very yin today compared to 100 years ago as evidenced through Tissue Mineral Hair Analysis,</li>
									<li> Healing methods must be adjusted to take into account the yin yang state of the person,</li>
									<li>· Yang detoxification methods heat, activate and contract the body to enhance toxin removal (more rest and sleep, hot saunas, coffee enemas, and hot baths), and</li>
									<li>Yang diets include kelp, sea salt, cooked meats and vegetables, especially root vegetables.</li>
								</ul>
							</li>

							<li>
								<strong>Balance the autonomic nervous system:</strong>

								<p>The detoxification process is a parasympathetic activity and involves the parasympathetic organs such as the liver, kidneys and intestines; therefore any therapy that promotes parasympathetic activity or inhibits sympathetic activity will assist detoxification greatly.</p>

								<ul>
									<li>Coffee enemas and colonic irrigation,</li>
									<li> Endo-met Laboratories recommended glandular extracts,</li>
									<li> Meditation and relaxation therapies that promote relaxation,</li>
									<li> Sauna therapy, especially when done in the morning and evening,</li>
								</ul>
							</li>

							<li>
								<strong>Reduce harmful stress of all kinds:</strong>

								<p>Stress interferes with detoxification for several reasons:</p>

								<ul>
									<li>The body must adapt to stress and uses up a lot of energy in the process,</li>
									<li> Stress of any kind activates the sympathetic nervous system and impairs detoxification,</li>
									<li> Stress depletes many vital nutrients such as zinc and magnesium needed for detoxification,</li>
								</ul>
							</li>

							<li>
								<strong>Eliminate many chronic infections:</strong>

								<p>Infections produce powerful toxins and they use up the body’s vitality fighting them. Eliminating infections frees up a lot of adaptive energy for detoxification. Methods used include:</p>

								<ul>
									<li>Balance the body chemistry to enhance adaptive energy,</li>
									<li> Removing toxic metals and replenishing missing vital nutrients,</li>
									<li> Coffee enemas and colon cleansing to help restore liver function,</li>
									<li> Improve and balance the sodium/potassium ratio, and</li>
									<li> Improving circulation, oxygenation and hydration.</li>
								</ul>
							</li>

							<li>
								<strong>Posture and Exercise:</strong>

								<p>Loss of spinal curvature interferes with breathing, digestion, and causes pinched nerves, bulged discs and back pain.  The body expends energy tightening muscles to compensate for loss of spinal curvature and adapts by contorting the structure which pulls soft tissue and organs further stressing the body.</p>
							</li>
						</ol>
					</div>
				</div><!-- /.panel-group #nbfaq-accordion -->
			</div><!-- /.tab-pane #nbfaq -->
		</div><!-- /.tab-content -->
	</div><!-- /.container -->

	<div class="testimonials-wrap clearfix">
		<div class="container">
			<article class="testimonial"></article><!-- /.testimonial -->
		</div><!-- /.conmtainer -->
	</div><!-- /.testimonials-wrap -->
</div><!-- /#start-nb-template -->

<?php get_footer(); ?>