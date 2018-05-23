<template>
	<div>
		<div class="navbar-items hide-on-med-and-down">
	    <div class="item" id="home-item" @click.prevent="$root.goToView('home')">Inicio</div>
	    <div class="item" id="info-item" @click.prevent="$root.goToView('info')">¿Qué es?</div>
	    <div class="item" id="search-item" @click.prevent="$root.goToView('we-search')">¿Qué buscamos?</div>
	    <div class="item" id="participate-item" @click.prevent="$root.goToView('participate')">¿Quienes participan?</div>
	    <div class="item" id="challenge-item" @click.prevent="$root.goToView('challenges')">Retos</div>
	    <div class="item" id="judge-item" @click.prevent="$root.goToView('judges')">Jurados</div>
	    <div class="item" id="price-item" @click.prevent="$root.goToView('prices')">Premios</div>
	    <div class="item" id="inscription-item" @click.prevent="$root.goToView('inscriptions')">Inscripción</div>
	    <div class="item" id="conctact-item" @click.prevent="$root.goToView('conctact')">Contacto</div>
	    <div>
		    <router-link to="/login" class="item right" v-if="!$root.auth">Login</router-link>
		    <router-link to="/dashboard" class="item right" v-else>Dashboard</router-link>
	    </div>
	  </div>
	  <section id="home">
	  	<div class="container">
		    <h1 class="title-main normal">Hackathon Montería</h1>
		    <div class="col s12 m5">
		      <div class="box-register">
		      	<header>
		      		¡Haz parte del <span class="r-text">evento!</span>
		      	</header>
		        <div class="content-register">
		          <div class="row">
		            <div class="col s12">
		              <img src="/images/logo.png" class="responsive-img" width="200" />
		              <p class="description-text">Simplemente selecciona tu rol:</p>
		            </div>
		            <div class="col s12 m6">
		              <button class="button-register">
		                <div class="icon-caracter">
		                  <svg version="1.1" id="businessman" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
		                	 viewBox="0 0 25.916 25.916" style="enable-background:new 0 0 25.916 25.916;" xml:space="preserve">
		                    <g class="fill-caracter-icon">
		                  		<path d="M7.938,8.13c0.09,0.414,0.228,0.682,0.389,0.849c0.383,2.666,2.776,4.938,4.698,4.843
		                  			c2.445-0.12,4.178-2.755,4.567-4.843c0.161-0.166,0.316-0.521,0.409-0.938c0.104-0.479,0.216-1.201-0.072-1.583
		                  			c-0.017-0.02-0.127-0.121-0.146-0.138c0.275-0.992,0.879-2.762-0.625-4.353c-0.815-0.862-1.947-1.295-2.97-1.637
		                  			c-3.02-1.009-5.152,0.406-6.136,2.759C7.981,3.256,7.522,4.313,8.078,6.32C8.024,6.356,7.975,6.402,7.934,6.458
		                  			C7.645,6.839,7.833,7.651,7.938,8.13z"/>
		                  		<path d="M23.557,22.792c-0.084-1.835-0.188-4.743-1.791-7.122c0,0-0.457-0.623-1.541-1.037
		                  			c0,0-2.354-0.717-3.438-1.492l-0.495,0.339l0.055,3.218l-2.972,7.934c-0.065,0.174-0.231,0.289-0.416,0.289
		                  			s-0.351-0.115-0.416-0.289l-2.971-7.934c0,0,0.055-3.208,0.054-3.218c0.007,0.027-0.496-0.339-0.496-0.339
		                  			c-1.082,0.775-3.437,1.492-3.437,1.492c-1.084,0.414-1.541,1.037-1.541,1.037c-1.602,2.379-1.708,5.287-1.792,7.122
		                  			c-0.058,1.268,0.208,1.741,0.542,1.876c4.146,1.664,15.965,1.664,20.112,0C23.35,24.534,23.614,24.06,23.557,22.792z"/>
		                  		<path d="M13.065,14.847l-0.134,0.003c-0.432,0-0.868-0.084-1.296-0.232l1.178,1.803l-1.057,1.02
		                  			l1.088,6.607c0.009,0.057,0.058,0.098,0.116,0.098c0.057,0,0.106-0.041,0.116-0.098l1.088-6.607l-1.058-1.02l1.161-1.776
		                  			C13.888,14.756,13.487,14.83,13.065,14.847z"/>
		                    </g>
		                  </svg>
		                </div>
		                <span>Empresario</span>
		              </button>
		            </div>
		            <div class="col s12 m6">
		              <button class="button-register">
		                <div class="icon-caracter">
		                  <svg version="1.1" id="developer" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
		                  	 viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
		                    <g class="fill-caracter-icon">
		                  		<path d="M441.217,235.868l-37.982-8.802l12.093-37.912l-0.879-0.293c-14.881-4.96-31.125-9.049-48.264-12.282
		                  			c-6.656,54.889-53.528,97.558-110.184,97.558c-55.875,0-102.231-41.501-109.884-95.295c-17.267,3.639-33.567,8.144-48.424,13.509
		                  			l11.073,34.715l-38.004,8.807L0,366.342v79.397h84.333V311.805h343.333V445.74H512v-80.103L441.217,235.868z"/>
		                  		<path d="M380.972,81.566c-18.27-40.058-54.956-69.109-98.135-77.711c-17.809-3.548-35.865-3.548-53.674,0
		                  			c-43.179,8.602-79.865,37.653-98.135,77.711l-36.553,80.144c44.649-14.98,101.279-23.544,160.609-24.199
		                  			c58.917-0.643,115.535,6.531,160.653,20.281L380.972,81.566z"/>
		                  		<path d="M175.696,173.584c5.143,39.744,39.182,70.554,80.304,70.554c41.688,0,76.11-31.66,80.513-72.196
		                  			C284.593,165.404,227.333,165.99,175.696,173.584z"/>
		                  		<path d="M114.333,510.805h283.333v-169H114.333V510.805z M256,405.091l21.213,21.213L256,447.518l-21.213-21.213L256,405.091z"/>
		                    </g>
		                  </svg>
		                </div>
		                <span>Desarrollador</span>
		              </button>
		            </div>
		            <div class="col s12 center">
		            	<div class="more-info">
		              	<a @click="$root.goToView('info')">Mas información</a>
		              </div>
		            </div>
		          </div>
		        </div>
		      </div>
		    </div>
		    <div class="col s12 m7">
		      <word-writing></word-writing>
		    </div>
	    </div>
	  </section>
	  <section id="info">
	  	<div class="container">
	  		<div class="row">
	  			<div class="col s12">
				    <h2 class="title-section">¿Qúe es la transformación digital?</h2>
				    <div class="col s12 container-content-info">
				    	<div class="col s12 m6">
					    	<div class="content-info">
							    <span>La transformación digital reconstruye las dinámicas de las organizaciones para adaptarlas a las necesidades del presente y del futuro.</span>
							    <span>En la actualidad, la transformación digital no es una opción. Las empresas de hoy ya no pueden plantearse la adaptación a este nuevo panorama pues no hay otra manera de renovarse y competir que mediante la transformación digital.</span>
						    </div>
					    </div>
					    <div class="col s12 m6">
					    	<div class="content-info">
					    		<h3 class="title-time">¡Es hora de <span class="sub">transformar</span> tu empresa!</h3>
					    		<div class="animation-digital-transform">
										<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
											 viewBox="0 0 656 273" style="enable-background:new 0 0 656 573.3;" xml:space="preserve">
											<g class="memo-dt">
												<rect x="198.4" y="131.9" class="st6 memo-container" width="254" height="254"/>
												<g class="objects-drawed-pencil">
													<g>
														<path class="st8" d="M341.2,309.8c-2,0-3.6-1.6-3.6-3.6v-10.9c0-2,1.6-3.6,3.6-3.6s3.6,1.6,3.6,3.6v10.9
															C344.9,308.2,343.2,309.8,341.2,309.8"/>
														<path class="st8" d="M355.8,309.8c-2,0-3.6-1.6-3.6-3.6v-25.5c0-2,1.6-3.6,3.6-3.6c2,0,3.6,1.6,3.6,3.6v25.5
															C359.4,308.2,357.8,309.8,355.8,309.8"/>
														<path class="st8" d="M370.3,309.8c-2,0-3.6-1.6-3.6-3.6V288c0-2,1.6-3.6,3.6-3.6s3.6,1.6,3.6,3.6v18.2
															C374,308.2,372.4,309.8,370.3,309.8"/>
														<path class="st8" d="M384.9,309.8c-2,0-3.6-1.6-3.6-3.6v-43.7c0-2,1.6-3.6,3.6-3.6s3.6,1.6,3.6,3.6v43.7
															C388.5,308.2,386.9,309.8,384.9,309.8"/>
														<path class="st8" d="M399.5,309.8c-2,0-3.6-1.6-3.6-3.6V277c0-2,1.6-3.6,3.6-3.6s3.6,1.6,3.6,3.6v29.1
															C403.1,308.2,401.5,309.8,399.5,309.8"/>
													</g>
													<path class="st8" d="M319.4,257c0,21.1-17.1,38.2-38.2,38.2S243,278.1,243,257s17.1-38.2,38.2-38.2S319.4,235.9,319.4,257"/>
													<path class="st8" d="M279.4,218.9C279.4,218.9,279.4,218.9,279.4,218.9l-0.1,39.9c0,0.1,0.1,0.1,0.1,0.1h39.8c0,0,0,0,0.1-0.1
														C320.4,236.3,301.9,217.8,279.4,218.9"/>
													<g>
														<path class="st8" d="M381.3,237h-29.1c-2,0-3.6-1.6-3.6-3.6s1.6-3.6,3.6-3.6h29.1c2,0,3.6,1.6,3.6,3.6
															C384.9,235.4,383.3,237,381.3,237"/>
														<path class="st8" d="M399.5,237c-0.9,0-1.9-0.4-2.6-1.1c-0.1-0.2-0.3-0.4-0.4-0.5c-0.1-0.2-0.3-0.4-0.3-0.7
															c-0.1-0.2-0.2-0.4-0.2-0.7c0-0.3-0.1-0.5-0.1-0.7c0-0.2,0-0.5,0.1-0.7c0-0.2,0.1-0.4,0.2-0.7c0.1-0.2,0.2-0.4,0.3-0.7
															c0.1-0.2,0.3-0.4,0.4-0.5c1.3-1.3,3.8-1.3,5.2,0c0.7,0.7,1.1,1.6,1.1,2.6c0,1-0.4,1.9-1.1,2.6C401.3,236.6,400.4,237,399.5,237"/>
														<path class="st8" d="M399.5,218.8h-10.9c-2,0-3.6-1.6-3.6-3.6s1.6-3.6,3.6-3.6h10.9c2,0,3.6,1.6,3.6,3.6S401.5,218.8,399.5,218.8"
															/>
														<path class="st8" d="M359.4,218.8h-7.3c-2,0-3.6-1.6-3.6-3.6s1.6-3.6,3.6-3.6h7.3c2,0,3.6,1.6,3.6,3.6S361.4,218.8,359.4,218.8"/>
														<path class="st8" d="M374,218.8c-0.9,0-1.9-0.4-2.6-1.1c-0.7-0.7-1.1-1.6-1.1-2.6c0-0.9,0.4-1.9,1.1-2.6c0.4-0.3,0.7-0.6,1.2-0.8
															c1.3-0.6,2.9-0.3,4,0.8c0.7,0.7,1.1,1.6,1.1,2.6c0,0.9-0.4,1.9-1.1,2.6C375.9,218.4,374.9,218.8,374,218.8"/>
													</g>
												</g>
												<g class="pencil-dt">
													<path class="st7" d="M358.2,222.4c1.4,1.4,1.4,3.7,0,5.1l-1.3,1.3l20.8-5.7l-20.2-20.2l-5.7,20.8l1.3-1.3
														C354.6,221,356.8,221,358.2,222.4z"/>
													<path class="st9" d="M357,228.8l1.3-1.3c1.4-1.4,1.4-3.7,0-5.1c-1.4-1.4-3.7-1.4-5.1,0l-1.3,1.3l-1.9,7L357,228.8z"/>
													<polygon class="st10" points="474.6,126.4 454.3,106 357.6,202.7 357.6,202.8 377.8,223.1 377.9,223 "/>
													<path class="st11" d="M497.5,93.3l-10.3-10.3c-2.8-2.8-7.3-2.8-10.1,0l-12.8,12.8l20.3,20.3l12.8-12.8
														C500.3,100.7,500.3,96.1,497.5,93.3z"/>
													<rect x="462.3" y="96.7" transform="matrix(0.7071 -0.7071 0.7071 0.7071 58.9513 364.5358)" class="st7" width="14.4" height="28.8"/>
												</g>
											</g>
											<g class="computer-dt">
												<path class="st0" d="M584,389.8H72V120.6c0-17.1,13.8-30.9,30.9-30.9h450.2c17.1,0,30.9,13.8,30.9,30.9L584,389.8L584,389.8z"/>
												<path class="st1" d="M433.9,566.3H222.1c0-19.5,15.8-35.3,35.3-35.3h141.2C418.1,531,433.9,546.8,433.9,566.3"/>
												<polygon class="st2" points="389.8,531 266.2,531 283.9,460.4 372.1,460.4 	"/>
												<path class="st1" d="M553.1,460.4H102.9c-17.1,0-30.9-13.8-30.9-30.9v-39.7h512v39.7C584,446.6,570.2,460.4,553.1,460.4"/>
												<g class="bars-horizontal">
													<path class="st3" d="M363.3,363.3c-4.9,0-8.8-4-8.8-8.8V328c0-4.9,3.9-8.8,8.8-8.8s8.8,4,8.8,8.8v26.5
														C372.1,359.4,368.2,363.3,363.3,363.3"/>
													<path class="st3" d="M398.6,363.3c-4.9,0-8.8-4-8.8-8.8v-61.8c0-4.9,3.9-8.8,8.8-8.8s8.8,4,8.8,8.8v61.8
														C407.4,359.4,403.5,363.3,398.6,363.3"/>
													<path class="st3" d="M433.9,363.3c-4.9,0-8.8-4-8.8-8.8v-44.1c0-4.9,3.9-8.8,8.8-8.8s8.8,4,8.8,8.8v44.1
														C442.8,359.4,438.8,363.3,433.9,363.3"/>
													<path class="st3" d="M469.2,363.3c-4.9,0-8.8-4-8.8-8.8V248.6c0-4.9,3.9-8.8,8.8-8.8s8.8,4,8.8,8.8v105.9
														C478.1,359.4,474.1,363.3,469.2,363.3"/>
													<path class="st3" d="M504.6,363.3c-4.9,0-8.8-4-8.8-8.8v-70.6c0-4.9,3.9-8.8,8.8-8.8s8.8,4,8.8,8.8v70.6
														C513.4,359.4,509.4,363.3,504.6,363.3"/>
												</g>
												<path class="st4" d="M310.3,235.3c0,51.2-41.5,92.7-92.7,92.7S125,286.5,125,235.3s41.5-92.7,92.7-92.7S310.3,184.1,310.3,235.3"/>
												<path class="st5 graphic-part" d="M213.4,142.7c0,0-0.1,0.1-0.1,0.1v96.6c0,0.2,0.1,0.3,0.3,0.3h96.6c0,0,0.1-0.1,0.1-0.1
													C312.7,185,267.9,140.3,213.4,142.7"/>
												<g class="bars-vertical">
													<path class="st4" d="M460.4,186.8h-70.6c-4.9,0-8.8-4-8.8-8.8s3.9-8.8,8.8-8.8h70.6c4.9,0,8.8,4,8.8,8.8
														C469.2,182.8,465.3,186.8,460.4,186.8"/>
													<path class="st4" d="M504.6,186.8c-2.3,0-4.6-1-6.3-2.6c-0.4-0.4-0.8-0.9-1.1-1.3c-0.4-0.5-0.6-1.1-0.8-1.6
														c-0.3-0.5-0.4-1.1-0.5-1.6c-0.1-0.6-0.2-1.2-0.2-1.8s0.1-1.1,0.2-1.8c0.1-0.5,0.3-1.1,0.5-1.6c0.2-0.5,0.4-1.1,0.8-1.6
														c0.3-0.4,0.7-0.9,1.1-1.3c3.3-3.3,9.2-3.3,12.5,0c1.6,1.7,2.6,3.9,2.6,6.3c0,2.4-1,4.6-2.6,6.3
														C509.1,185.8,506.8,186.8,504.6,186.8"/>
													<path class="st4" d="M504.6,142.6h-26.5c-4.9,0-8.8-4-8.8-8.8c0-4.9,3.9-8.8,8.8-8.8h26.5c4.9,0,8.8,4,8.8,8.8
														C513.4,138.7,509.4,142.6,504.6,142.6"/>
													<path class="st4" d="M407.4,142.6h-17.7c-4.9,0-8.8-4-8.8-8.8c0-4.9,3.9-8.8,8.8-8.8h17.7c4.9,0,8.8,4,8.8,8.8
														C416.3,138.7,412.3,142.6,407.4,142.6"/>
													<path class="st4" d="M442.8,142.6c-2.3,0-4.6-1-6.3-2.6c-1.6-1.7-2.6-4-2.6-6.3c0-2.3,1-4.6,2.6-6.3c0.9-0.8,1.8-1.4,2.9-1.9
														c3.3-1.4,7.1-0.6,9.6,1.9c1.6,1.7,2.6,4,2.6,6.3c0,2.3-1,4.6-2.6,6.3C447.3,141.6,445.1,142.6,442.8,142.6"/>
												</g>
											</g>
											<g class="transform-arrow" fill="#f28a7c">
								        <g class="icon_arrow-line">
							            <path class="arrow-line-a" d="m 30.201849,72.467726 2.78648,0.161796 0.287637,-4.674096 -2.804458,-0.161796 z"></path>
							            <path class="arrow-line-b" d="m 35.073695,61.303828 -2.750526,-0.683137 -1.06066,4.566232 2.660639,0.66516 z"></path>
							            <path class="arrow-line-c" d="m 33.707421,57.744325 2.444911,1.312342 2.265139,-4.062868 -2.498843,-1.348297 z"></path>
							            <path class="arrow-line-d" d="m 37.752311,51.578114 2.157275,1.707842 2.912321,-3.613435 -2.193229,-1.743797 z"></path>
							            <path class="arrow-line-e" d="m 42.749998,46.005153 1.599979,2.301094 3.865118,-2.552776 -1.599979,-2.337047 z"></path>
							            <path class="arrow-line-f" d="m 49.275755,42.229922 0.916842,2.624685 4.422413,-1.52807 -0.898864,-2.606707 z"></path>
							            <path class="arrow-line-g" d="m 56.232967,40.036693 0.287636,2.804457 4.602187,-0.431455 -0.233705,-2.732548 z"></path>
									      </g>
									      <path d="m 60.392578,33.474609 -2.042969,2.113282 5.839844,5.648437 -5.583984,5.773438 2.113281,2.042968 7.587891,-7.845703 -0.107422,-0.103515 z" class="arrow-end"></path>
									    </g>
										</svg>
									</div>
				    		</div>
				    	</div>
				    	<div class="col s12">
								<div class="container-objects">
									<h2 class="title-section">¿Qué ventajas aporta la Transformación Digital?</h2>
						      <div class="object">
						        <img src="/images/judges/omar.jpg" class="responsive-img" />
						      	<span class="title-object">Omar Flórez</span>
						        <div class="info">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
						      </div>
						      <div class="object">
						        <img src="/images/judges/sergio.jpg" class="responsive-img" />
						      	<span class="title-object">Sergio Molina</span>
						        <div class="info">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
						      </div>
						      <div class="object">
						        <img src="/images/judges/cheo.jpg" class="responsive-img" />
						      	<span class="title-object">Cheo</span>
						        <div class="info">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
						      </div>
						      <div class="object">
						        <img src="/images/judges/uribe.png" class="responsive-img" />
						      	<span class="title-object">Uribe</span>
						        <div class="info">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
						      </div>
						    </div>
			    		</div>
				    </div>
			    </div>
		    </div>
	    </div>
    </section>
    <section id="we-search">
	  	<div class="container">
	  		<h2 class="title-section">¿Qué buscamos?</h2>
	    </div>
    </section>
    <section id="participate">
	  	<div class="container">
	  		<h2 class="title-section">¿Quienes participan?</h2>
	    </div>
    </section>
    <section id="challenges">
	  	<div class="container">
	  		<h2 class="title-section">Retos</h2>
	    </div>
    </section>
	  <section id="judges">
	  	<div class="container">
	  		<h2 class="title-section" id="title-section-two">Jurados</h2>
		    <div class="container-judges">
		      <div class="judge">
		        <img src="/images/judges/omar.jpg" class="responsive-img" />
		      	<span class="name">Omar Flórez</span>
		        <div class="info">
		          <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					    consequat.</span>
					    <span>ut labore et dolore magna aliqua. Ut enim ad minim veniam olor sit amet, consectetur adipisicing elit, sed do eiusmod
					    tempor incididunt ut labore et.</span>
		        </div>
		      </div>
		      <div class="judge">
		        <img src="/images/judges/sergio.jpg" class="responsive-img" />
		      	<span class="name">Sergio Molina</span>
		        <div class="info">
		          <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					    consequat.</span>
					    <span>ut labore et dolore magna aliqua. Ut enim ad minim veniam olor sit amet, consectetur adipisicing elit, sed do eiusmod
					    tempor incididunt ut labore et.</span>
		        </div>
		      </div>
		      <div class="judge">
		        <img src="/images/judges/cheo.jpg" class="responsive-img" />
		      	<span class="name">Cheo</span>
		        <div class="info">
		          <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					    consequat.</span>
					    <span>ut labore et dolore magna aliqua. Ut enim ad minim veniam olor sit amet, consectetur adipisicing elit, sed do eiusmod
					    tempor incididunt ut labore et.</span>
		        </div>
		      </div>
		      <div class="judge">
		        <img src="/images/judges/uribe.png" class="responsive-img" />
		      	<span class="name">Uribe</span>
		        <div class="info">
		          <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					    consequat.</span>
					    <span>ut labore et dolore magna aliqua. Ut enim ad minim veniam olor sit amet, consectetur adipisicing elit, sed do eiusmod
					    tempor incididunt ut labore et.</span>
		        </div>
		      </div>
		    </div>
	    </div>
	  </section>
    <section id="prices">
	  	<div class="container">
		    <h2 class="title-section">Premios</h2>
	    </div>
    </section>
		<section id="inscriptions">
	  	<div class="container">
	  		<h2 class="title-section">Inscripción</h2>
	    </div>
    </section>
    <section id="conctact">
	  	<div class="container">
	  		<h2 class="title-section">Contacto</h2>
	    </div>
    </section>
    <footer id="footer">
    	<div class="container">
		    <h1 class="title-main">PATROCINADORES</h1>
	    </div>
  	</footer>
  </div>
</template>
<script>
	window.ScrollMagic = require('ScrollMagic');
	require('animation.gsap');
	window.TweenMax = require('TweenMax');
	require('debug.addIndicators')
  export default {
    data() {
      return {

      }
    },
    methods: {

    },
    mounted() {
    	require('../interactions')
    }
  }
</script>

<style lang="scss" scoped>
@import "~@";
.box-register {
	margin-bottom: 60px;
  background: #343233;
  position: relative;
  border: 1.5px solid #222122;
  box-shadow: 0 3px 8px rgba(0, 0, 0, 0.25);
  & header {
    width: 100%;
    left: 0;
    position: relative;
    height: 35px;
    line-height: 35px;
    top: 0;
    font-weight: 300;
    font-size: 1.5rem;
    padding: 0 1em;
    color: #fff;
    background: #222122;
    text-align: center;
  }
}
.content-register {
  padding: 0 1em;
  text-align: center;
}

.button-register {
  display: inline-block;
  padding: .5em 1em;
  line-height: inherit;
  font-size: inherit;
  font-weight: 600;
  text-decoration: none;
  border-radius: 5px;
  color: $button;
  background-color: #1b1b1b;
  border: 0;
  cursor: pointer;
  width: 100%;
  font-size: .9rem;
  box-shadow: 0 3px 8px rgba(0, 0, 0, 0.25);
  text-transform: uppercase;
  &:active {
    color: #343233;
    background-color: darken($button, 40);
    transform: translateY(2px);
  }
  &:hover {
    color: #343233;
    background-color: darken($button, 10);
  }
  &:focus {
    background-color: darken($button, 20);
  }
}

.icon-caracter {
  margin: auto;
  width: 40px;
  height: 40px;
  padding: 7px;
  border: 1px solid;
  border-radius: 50%;
  box-shadow: 0 3px 8px rgba(0, 0, 0, 0.25);
  background: #222122;
}

.description-text {
  margin: 0 0 1em 0;
  text-align: left;
  font-size: 1.2rem;
  color: #fff;
}

.fill-caracter-icon {
  fill: $button
}
.container-content-info {
  font-size: 1.3rem;
  text-align: justify;
  color: #fff;
  border-radius: 0 0 5px 5px;
  & .content-info {
  	display: block;
  }
}
.title-section {
  font-size: 2rem;
  color: #ffffff;
  padding: 80px 0px 15px 0px;
  border-radius: 5px 5px 0 0;
  font-weight: bold;
  text-transform: uppercase;
  border-bottom: 5px solid;
}
.animation-digital-transform {
	margin: auto;
}

// digital fills 
.st0{fill:#38454F;}
.st1{fill:#E8EDEE;}
.st2{fill:#B0B6BB;}
.st3{fill:#a5c4a6;}
.st4{fill:#f8a72f;}
.st5{fill:#FFEB3B;}
.st6{fill:#EDEADA;}
.st7{fill:#F7E6A1;}
.st8{fill:none;stroke:#424A60;stroke-miterlimit:10;}
.st9{fill:#424A60;}
.st10{fill:#EBBA16;}
.st11{fill:#ED7161;}

.computer-dt {
	transform: scale(0.5) translateX(589px) translateY(-22px);
}
.memo-dt {
	transform: scale(0.6) translateY(-28px) translateX(-75px);
	animation: moveMemo 5s linear infinite;
}
.pencil-dt {
	animation: drawWithPencil 5s linear infinite;
}

.graphic-part {
	animation: animBarsVertical 1s linear infinite;
}
.bars-vertical {
	animation: animBarsVertical 2s linear infinite;
}
.bars-horizontal {
	animation: animBarsHorizontal 1s linear infinite;
}

.title-time {
  font-size: 1.5rem;
  text-align: center;
  margin: 0;
  text-transform: uppercase;
  & .sub {
  	background: #FFEB3B;
    color: $background-welcome;
    padding: 0 8px;
    font-weight: bold;
  }
}

.transform-arrow {
	transform: translateX(105px) translateY(-65px) scale(3.5);
}

.transform-arrow {
	& .icon_arrow-line {
		& path {
			animation: draw_arrow_line_a 1.5s ease-in 0.45s forwards infinite;
		}
	  & .arrow-line-b {
			animation-name: draw_arrow_line_b;
		}
		& .arrow-line-c {
			animation-name: draw_arrow_line_c;
		}
		& .arrow-line-d {
			animation-name: draw_arrow_line_d;
		}
		& .arrow-line-e {
			animation-name: draw_arrow_line_e;
		}
		& .arrow-line-f {
			animation-name: draw_arrow_line_f;
		}
		& .arrow-line-g {
			animation-name: draw_arrow_line_g;
		}
	}
	& .arrow-end {
		animation: draw_arrow_line-end 1.5s ease-in 0.45s forwards infinite;
	}
}
</style>
