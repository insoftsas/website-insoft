<template>
	<div>
		<div class="navbar-items hide-on-med-and-down">
	    <div class="item" id="home-item" @click.prevent="$root.goToView('home')">Inicio</div>
	    <div class="item" id="info-item" @click.prevent="$root.goToView('info')">¿Qué es?</div>
	    <div class="item" id="search-item" @click.prevent="$root.goToView('we-search')">¿Qué buscamos?</div>
	    <div class="item" id="participate-item" @click.prevent="$root.goToView('participate')">¿Quiénes participan?</div>
	    <div class="item" id="challenge-item" @click.prevent="$root.goToView('challenges')">Retos</div>
	    <div class="item" id="judge-item" @click.prevent="$root.goToView('judges')">Jurados</div>
	    <div class="item" id="award-item" @click.prevent="$root.goToView('awards')">Premios</div>
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
		                <span>Dev - Maker</span>
		              </button>
		            </div>
		            <div class="col s12 center">
		            	<div class="more-info" @click="$root.goToView('info')">
		              	<a>Mas información</a>
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
				    <div class="col s12 container-content-info no-padding">
				    	<div class="col s12 m6">
					    	<div class="content-info">
							    <span>La transformación digital es el proceso por el cual las empresas reorganizan sus métodos de trabajo y estrategias, para obtener más beneficios gracias a la implementación de las nuevas tecnologías, reconstruye las dinámicas de las organizaciones para adaptarlas a las necesidades del presente y del futuro.</span>
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
								<h2 class="subtitle-section">¿Qué ventajas aporta la Transformación Digital?</h2>
								<span class="text-justify">La clave para la organización es ver la transformación digital como una oportunidad que permite combinar prácticas y formas de hacer que dan como resultado nuevas técnicas y habilidades como las siguientes:</span>
								<div class="container-objects">
						      <div class="object">
						        <div class="container-img">
						        	<img src="/images/advantage/online-shopping.svg" class="responsive-img" />
					        	</div>
						      	<span class="title-object">Generar experiencias nuevas al cliente</span>
						      </div>
						      <div class="object">
						        <div class="container-img">
						        	<img src="/images/advantage/businessmen_efi.svg" class="responsive-img" />
					        	</div>
						      	<span class="title-object two-lines">Mejorar la eficiencia operativa</span>
						      </div>
						      <div class="object">
						        <div class="container-img">
						        	<img src="/images/advantage/businessman_money.svg" class="responsive-img" />
					        	</div>
						      	<span class="title-object">Generar nuevas fuentes de ingresos</span>
						      </div>
						      <div class="object">
						        <div class="container-img">
						        	<img src="/images/advantage/student.svg" class="responsive-img" />
					        	</div>
						      	<span class="title-object">Responder rápido a los cambios en el mercado</span>
						      </div>
						      <div class="object">
						        <div class="container-img">
						        	<img src="/images/advantage/profits.svg" class="responsive-img" />
					        	</div>
						      	<span class="title-object">Crear una ventaja competitiva para la organización</span>
						      </div>
						      <div class="object">
						      	<div class="container-img">
						        	<img src="/images/advantage/meeting.svg" class="responsive-img" />
					        	</div>
						      	<span class="title-object two-lines">Mejorar la colaboración interna</span>
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
	  		<div class="col s12 container-content-info">
	  			<div class="content-info step-row">
					  <span>Queremos realizar una maratón tecnológica, denominada hackathon. Este evento consiste en la asignación de las necesidades tecnológicas de las empresas del departamento de Córdoba a varios grupos de desarrolladores, para que compitan por un premio a la mejor solución tecnológica (prototipo) de las necesidades presentadas, con el fin de mejorar el proceso de transformación productiva y digital de nuestros empresarios.</span>
			    </div>
			    <div class="col s12 m6">
		    		<div class="content-solution-image">
							<svg version="1.1" id="solution-business" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 464 464" style="enable-background:new 0 0 464 464;" xml:space="preserve">
								<path style="fill:#A6001E;" d="M64,328c0,4.418-3.582,8-8,8s-8,3.582-8,8v16c0,13.255,10.745,24,24,24h16c13.255,0,24-10.745,24-24
									v-16c0-4.418-3.582-8-8-8c-4.418,0-8-3.582-8-8c0-8.837,7.163-16,16-16h40v-40c0-8.837-7.163-16-16-16c-4.418,0-8,3.582-8,8
									s-3.582,8-8,8h-16c-13.255,0-24-10.745-24-24v-16c0-13.255,10.745-24,24-24h16c4.418,0,8,3.582,8,8s3.582,8,8,8
									c8.837,0,16-7.163,16-16v-48C68.053,160,0,228.053,0,312h48C56.837,312,64,319.163,64,328z"/>
								<path style="fill:#F40E34;" d="M72,372c-6.617,0-12-5.383-12-12v-12.398c9.117-1.859,16-9.945,16-19.602c0-15.438-12.563-28-28-28
									H12.508C18.281,232.359,72.359,178.281,140,172.508V208c0,0.898-0.297,1.727-0.797,2.398C136.773,202.086,129.086,196,120,196h-16
									c-19.852,0-36,16.148-36,36v16c0,19.852,16.148,36,36,36h16c9.086,0,16.773-6.086,19.203-14.398c0.5,0.672,0.797,1.5,0.797,2.398v28
									h-28c-15.438,0-28,12.563-28,28c0,9.656,6.883,17.742,16,19.602V360c0,6.617-5.383,12-12,12H72z"/>
								<path style="fill:#E7B900;" d="M176,392c4.418,0,8,3.582,8,8s3.582,8,8,8h8c17.673,0,32-14.327,32-32s-14.327-32-32-32h-8
									c-4.418,0-8,3.582-8,8s-3.582,8-8,8c-13.255,0-24-10.745-24-24v-24h-40c-8.837,0-16,7.163-16,16c0,4.418,3.582,8,8,8
									c4.418,0,8,3.582,8,8v16c0,13.255-10.745,24-24,24H72c-13.255,0-24-10.745-24-24v-16c0-4.418,3.582-8,8-8s8-3.582,8-8
									c0-8.837-7.163-16-16-16H0c0,83.947,68.053,152,152,152v-48C152,402.745,162.745,392,176,392z"/>
								<path style="fill:#FFD422;" d="M140,451.492C72.359,445.719,18.281,391.641,12.508,324H48c0.898,0,1.727,0.297,2.398,0.797
									C42.086,327.227,36,334.914,36,344v16c0,19.852,16.148,36,36,36h16c19.852,0,36-16.148,36-36v-16
									c0-9.086-6.086-16.773-14.398-19.203c0.672-0.5,1.5-0.797,2.398-0.797h28v12c0,19.852,16.148,36,36,36
									c9.656,0,17.742-6.883,19.602-16H200c11.031,0,20,8.969,20,20s-8.969,20-20,20h-4.398c-1.859-9.117-9.945-16-19.602-16
									c-19.852,0-36,16.148-36,36V451.492z"/>
								<g class="puzzle-blue">
									<path style="fill:#1E81CE;" d="M240,288c0-4.418,3.582-8,8-8s8-3.582,8-8v-8c0-17.673-14.327-32-32-32s-32,14.327-32,32v8
										c0,4.418,3.582,8,8,8s8,3.582,8,8c0,13.255-10.745,24-24,24h-32v24c0,13.255,10.745,24,24,24c4.418,0,8-3.582,8-8s3.582-8,8-8h8
										c17.673,0,32,14.327,32,32s-14.327,32-32,32h-8c-4.418,0-8-3.582-8-8s-3.582-8-8-8c-13.255,0-24,10.745-24,24v48
										c83.947,0,152-68.053,152-152h-40C250.745,312,240,301.255,240,288z"/>
									<path style="fill:#5AAAE7;" d="M164,416c0-5.406,3.594-9.984,8.516-11.484C174.57,413.375,182.523,420,192,420h8
										c24.258,0,44-19.742,44-44s-19.742-44-44-44h-8c-9.477,0-17.43,6.625-19.484,15.484c-4.922-1.5-8.516-6.078-8.516-11.484v-12h20
										c19.852,0,36-16.148,36-36c0-9.656-6.883-17.742-16-19.602V264c0-11.031,8.969-20,20-20s20,8.969,20,20v4.398
										c-9.117,1.859-16,9.945-16,19.602c0,19.852,16.148,36,36,36h27.492C285.719,391.641,231.641,445.719,164,451.492V416z"/>
								</g>
								<g class="hand-puzzle">
									<path style="fill:#5EAC24;" d="M267.022,97.013c-3.119-3.129-3.112-8.194,0.017-11.314s3.136-8.185,0.017-11.314l-11.297-11.331
										c-9.359-9.387-24.554-9.409-33.941-0.051l-11.331,11.297c-9.387,9.359-9.409,24.554-0.051,33.941l11.297,11.331
										c3.12,3.129,8.185,3.136,11.314,0.017c3.129-3.12,8.194-3.112,11.314,0.017c6.239,6.258,6.224,16.388-0.034,22.627L216,170.476
										l28.242,28.327c6.239,6.258,16.37,6.273,22.627,0.034c3.129-3.12,3.136-8.185,0.017-11.314c-3.119-3.129-3.112-8.194,0.017-11.314
										l11.331-11.297c9.387-9.359,24.583-9.336,33.941,0.051l11.297,11.331c9.359,9.387,9.336,24.583-0.051,33.941l-11.331,11.297
										c-3.129,3.12-8.194,3.112-11.314-0.017c-3.119-3.129-8.185-3.136-11.314-0.017c-6.258,6.239-6.273,16.37-0.034,22.627l33.89,33.992
										c59.449-59.271,59.593-155.512,0.322-214.96l-33.992,33.89C283.392,103.286,273.261,103.271,267.022,97.013z"/>
									<path style="fill:#69C229;" d="M297.93,235.656c-0.758-0.766-1.039-1.617-1.133-2.258c2.93,1.609,6.219,2.469,9.648,2.469
										c5.32,0,10.336-2.07,14.109-5.828l11.344-11.305c6.805-6.797,10.563-15.828,10.578-25.445c0.008-9.617-3.719-18.656-10.516-25.469
										l-11.289-11.328c-6.805-6.828-15.859-10.586-25.492-10.586c-9.602,0-18.625,3.734-25.422,10.516l-11.328,11.289
										c-3.773,3.766-5.867,8.781-5.875,14.125c-0.008,3.422,0.836,6.711,2.438,9.625c-0.648-0.094-1.5-0.375-2.258-1.133L232.969,170.5
										l19.828-19.766c10.938-10.906,10.961-28.672,0.055-39.602c-3.766-3.789-8.797-5.883-14.164-5.883c-3.969,0-7.766,1.156-11,3.297
										l-8.75-8.781c-4.672-4.68-4.664-12.297,0.023-16.977l11.328-11.281c2.266-2.258,5.273-3.508,8.477-3.508
										c3.211,0,6.227,1.258,8.5,3.531l8.75,8.773c-2.156,3.234-3.328,7.047-3.328,11.039c-0.008,5.328,2.063,10.352,5.828,14.133
										c5.297,5.32,12.336,8.242,19.836,8.242c7.461,0,14.484-2.906,19.773-8.18l25.133-25.055C344.5,105.711,356.047,137.313,356,170.68
										s-11.688,64.938-33.008,90.109L297.93,235.656z"/>
									<path style="fill:#FFB398;" d="M256,40l30.64-30.64c6.006-6,14.151-9.367,22.64-9.36H464v112h-24l-24,32h-88v-16
										c0.032-13.606,8.664-25.704,21.52-30.16c3.358-1.225,6.906-1.848,10.48-1.84l0,0c13.255,0,24-10.745,24-24V56
										c0-13.255-10.745-24-24-24h-34.72c-8.489-0.007-16.634,3.36-22.64,9.36L280,64L256,40z"/>
								</g>
							</svg>
	    			</div>
    			</div>
		    	<div class="col s12 m6 no-padding">
		    		<div class="content-info">
						  <span>Para el desarrollo del mencionado evento se requiere convocar a un grupo de empresarios con el objetivo de capacitarlos en la identificación de sus necesidades tecnológicas, tendientes a la automatización y optimización de sus actividades mercantiles; para la solución (prototipo) de dichas necesidades se requiere de la conformación de los team makers (programadores) y de un espacio optimo y adecuado para el desarrollo del evento.</span>
						</div>
		    	</div>
		    </div>
	    </div>
    </section>
    <section id="participate">
	  	<div class="container">
	  		<h2 class="title-section">¿Quiénes participan?</h2>
	  		<div class="row">
		  		<div class="col s12 m6 container-content-info">
		  			<div class="container-participate enterprise">
			  			<div class="card-participate">
			  				<img src="/images/participate/teamwork.svg" class="responsive-img" />	
		  				</div>
		  				<div class="card-title-participate">
		  					<span class="title">Empresas</span>
		  				</div>
		  				<div class="card-info-participate">Las empresas requieren soluciones tecnológicas para el potenciamiento de su operatividad, ya sea replantear los modelos de negocios u optimizar procesos de la cadena de valor. Las empresas identificarán las necesidades que limitan sus procesos de transformación digital, y serán expuestas ante los makers para el desarrollo de soluciones tecnológicas.
		  				</div>
	  				</div>
					</div>
					<div class="col s12 m6 container-content-info">
						<div class="container-participate developer">
			  			<div class="card-participate">
			  				<img src="/images/participate/hacker.svg" class="responsive-img" />
		  				</div>
		  				<div class="card-title-participate">
		  					<span class="title">Desarrolladores - Makers</span>
							</div>
							<div class="card-info-participate">Los makers son agentes generadores de ideas y conocimientos para la resolución de problemas. Son los desarrolladores de las soluciones a las dificultades presentadas por los empresarios; estos son profesionales o estudiantes, técnicos o tecnólogos que conforman el capital humano. 
		  				</div>
						</div>
					</div>
				</div>
	    </div>
    </section>
    <section id="challenges">
	  	<div class="container">
	  		<h2 class="title-section">Retos</h2>
	  		<div class="col s12 container-content-info">
		  		<div class="content-info margin-default-bottom">
				    <span>Proponemos los siguientes retos a cumplir para que el evento sea todo un exito.</span>
			    </div>
		    </div>
	  		<div class="col s12 m6 l3">
		  		<div class="container-challenge">
		  			<div class="title-number-challenge">
		  				<div class="bg-number">
		  					<span class="number-challenge">1</span>
		  				</div>
						</div>
		  			<div class="challenge-icon">
		  				<div>
		  					<img src="/images/challenges/car-repair.svg" class="responsive-img" />
	  					</div>
	  				</div>
	  				<div class="title-challenge">Diagnóstico</div>
	  				<div class="info-challenge">Socialización del proyecto al sector productivo y capacitación en Transformación Productiva y Digital</div>
	  			</div>
  			</div>
  			<div class="col s12 m6 l3">
	  			<div class="container-challenge">
	  				<div class="title-number-challenge">
		  				<div class="bg-number">
		  					<span class="number-challenge">2</span>
		  				</div>
						</div>
		  			<div class="challenge-icon">
		  				<div>
			  				<img src="/images/challenges/user.svg" class="responsive-img" />
			  			</div>
	  				</div>
	  				<div class="title-challenge">Selección</div>
	  				<div class="info-challenge">Reclutamiento y selección de los Makers, socialización del proyecto y capacitación en prototipado.</div>
	  			</div>
  			</div>
  			<div class="col s12 m6 l3">
	  			<div class="container-challenge">
	  				<div class="title-number-challenge">
		  				<div class="bg-number">
		  					<span class="number-challenge">3</span>
		  				</div>
						</div>
		  			<div class="challenge-icon">
		  				<div>
		  					<img src="/images/challenges/problem.svg" class="responsive-img" />
		  				</div>
	  				</div>
	  				<div class="title-challenge">Necesidades</div>
	  				<div class="info-challenge">Categorización de necesidades y conformación de Makers Team.</div>
	  			</div>
  			</div>
  			<div class="col s12 m6 l3">
	  			<div class="container-challenge">
	  				<div class="title-number-challenge">
		  				<div class="bg-number">
		  					<span class="number-challenge">4</span>
		  				</div>
						</div>
		  			<div class="challenge-icon">
		  				<div>
			  				<img src="/images/challenges/employee_female.svg" class="responsive-img mini" />
			  				<img src="/images/challenges/employee_male.svg" class="responsive-img mini" />
		  				</div>
	  				</div>
	  				<div class="title-challenge">Desarrollo</div>
	  				<div class="info-challenge">Desarrollo tecnológico para solucionar la necesidad planteada por el sector empresarial.</div>
	  			</div>
  			</div>
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
		        </div>
		      </div>
		    </div>
	    </div>
	  </section>
    <section id="awards">
	  	<div class="container">
		    <h2 class="title-section">Premios</h2>
		    <div class="container-awards">
		    	<div class="award-podium-icon">
			    	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
							<rect y="345.024" style="fill:#F89E62;" width="170.672" height="166.976"/>
							<rect x="170.672" y="267.584" style="fill:#ED6362;" width="170.672" height="244.416"/>
							<rect x="341.328" y="376.352" style="fill:#F89E62;" width="170.672" height="135.648"/>
							<path style="fill:#E95454;" d="M341.328,267.584H246.72c-7.712,0-14.464,5.648-14.88,13.232c-0.416,8.128,6.064,14.88,14.048,14.88  h9.872c8.128,0,14.608,6.752,14.192,14.88c-0.416,7.584-7.296,13.36-14.88,13.36h-15.12c-7.584,0.144-13.632,6.336-13.632,14.048  s6.336,14.048,14.048,14.048h28.624c6.608,0,11.984,5.376,11.856,11.856v1.104c0.416,6.336-4.688,11.84-11.168,11.84h-32.32  c-7.712,0-14.464,5.648-15.024,13.232c-0.272,8.128,6.064,14.88,14.192,14.88h27.776c6.48,0,11.856,5.376,11.856,11.856  l-0.144,0.832v0.144c0.144,6.896-5.504,12.544-12.4,12.544h-26c-7.712,0-14.464,5.648-15.024,13.36  c-0.272,8.128,6.064,14.88,14.192,14.88h29.456c6.896,0,11.856,5.648,11.856,12.544c0,0,0,0,0,0.144s0,0.144,0,0.144  c0,6.752-4.96,12.544-11.856,12.544h-17.456c-7.584,0-14.336,5.648-14.736,13.232c-0.432,8.224,6.048,14.832,14.048,14.832h93.248  V267.584H341.328z"/>
							<path style="fill:#FAAB74;" d="M418.576,376.352c-7.616,0-14.288,5.568-14.688,13.056c-0.416,8.032,5.984,14.704,13.872,14.704h9.76  c8.032,0,14.416,6.672,14.016,14.688c-0.416,7.488-7.232,13.2-14.704,13.2h-14.928c-7.488,0.144-13.472,6.256-13.472,13.872  s6.256,13.872,13.872,13.872h28.272c6.528,0,11.84,5.312,11.696,11.696v1.088c0.416,6.256-4.624,11.696-11.024,11.696h-31.904  c-7.616,0-14.288,5.584-14.832,13.056c-0.272,8.048,5.984,14.72,14.016,14.72H512V376.352H418.576z"/>
							<path style="fill:#F89959;" d="M55.664,345.024c-9.376,0-17.584,6.864-18.08,16.08c-0.512,9.888,7.36,18.096,17.072,18.096h12  c9.888,0,17.76,8.208,17.248,18.08c-0.496,9.216-8.88,16.24-18.08,16.24H47.44c-9.216,0.176-16.576,7.712-16.576,17.088  s7.696,17.088,17.088,17.088h34.8c8.032,0,14.576,6.528,14.4,14.4v1.344c0.496,7.696-5.696,14.4-13.568,14.4H44.288  c-9.376,0-17.584,6.864-18.256,16.08C25.696,503.792,33.408,512,43.296,512h127.376V345.024H55.664z"/>
							<g>
								<path style="fill:#FFFFFF;" d="M258.512,352.896c-1.6,4.48-4.56,8.4-8.88,11.76c-2.656,2.064-5.152,3.584-7.568,4.832v12.8   c5.088-2.224,9.792-4.96,13.776-8.688v53.088h14.096V352.88h-11.424V352.896z"/>
								<path style="fill:#FFFFFF;" d="M110.032,452.336v13.088H60.64c0.528-4.944,2.144-9.632,4.816-14.064   c2.672-4.432,7.952-10.304,15.84-17.616c6.352-5.92,10.24-9.92,11.68-12.032c1.936-2.912,2.912-5.776,2.912-8.624   c0-3.136-0.848-5.552-2.528-7.248c-1.68-1.68-4.016-2.528-6.992-2.528c-2.944,0-5.28,0.88-7.024,2.656s-2.736,4.72-3.008,8.816   l-14.032-1.408c0.832-7.76,3.456-13.312,7.872-16.688c4.416-3.376,9.92-5.056,16.544-5.056c7.248,0,12.944,1.952,17.104,5.872   c4.144,3.904,6.224,8.768,6.224,14.592c0,3.312-0.592,6.464-1.776,9.456s-3.072,6.128-5.648,9.408   c-1.712,2.176-4.784,5.296-9.232,9.376s-7.264,6.784-8.448,8.128s-2.144,2.64-2.88,3.904h27.968V452.336z"/>
								<path style="fill:#FFFFFF;" d="M402.256,460.944l13.632-1.648c0.432,3.472,1.6,6.128,3.504,7.968s4.208,2.752,6.912,2.752   c2.912,0,5.36-1.104,7.344-3.312s2.976-5.184,2.976-8.928c0-3.536-0.96-6.352-2.864-8.416c-1.904-2.08-4.224-3.104-6.976-3.104   c-1.808,0-3.968,0.352-6.464,1.056l1.552-11.488c3.808,0.096,6.72-0.72,8.72-2.48s3.008-4.08,3.008-6.992   c0-2.48-0.736-4.448-2.208-5.92c-1.472-1.472-3.424-2.208-5.872-2.208c-2.4,0-4.464,0.832-6.16,2.512   c-1.712,1.664-2.736,4.112-3.104,7.312l-12.992-2.208c0.896-4.448,2.272-8,4.08-10.656c1.824-2.656,4.368-4.752,7.616-6.272   c3.264-1.52,6.912-2.288,10.96-2.288c6.912,0,12.464,2.208,16.64,6.624c3.44,3.616,5.168,7.68,5.168,12.24   c0,6.448-3.52,11.6-10.576,15.44c4.208,0.896,7.584,2.928,10.096,6.064s3.792,6.928,3.792,11.376   c0,6.448-2.352,11.952-7.072,16.496s-10.576,6.816-17.6,6.816c-6.656,0-12.16-1.92-16.544-5.744   C405.488,472.144,402.96,467.136,402.256,460.944z"/>
							</g>
							<g class="award-icon">
								<path style="fill:#2B414D;" d="M308.567,161.452l-152.025,68.923l122.88,270.966l66.166-55.926l85.465-12.603  C431.053,432.812,308.567,161.452,308.567,161.452z"/>
								<path style="fill:#475F6C;" d="M195.927,164.209l152.025,68.923l-122.88,271.36l-66.166-56.32l-85.858-12.603  C73.047,435.569,195.927,164.209,195.927,164.209z"/>
								<path style="fill:#EFC75E;" d="M449.17,197.292c0,14.572-20.874,26.782-24.025,40.566c-3.151,14.178,10.634,34.265,4.726,47.262  c-6.302,12.997-30.326,14.572-38.991,25.6s-4.726,35.446-15.754,44.505s-33.083-0.394-45.686,5.908s-19.298,29.932-33.083,33.083  c-13.391,3.151-29.538-14.966-43.717-14.966c-14.178,0-30.326,18.117-43.717,14.966c-13.785-3.151-20.48-26.782-33.083-33.083  c-12.603-6.302-35.052,3.151-45.686-5.908c-11.028-9.058-7.089-33.477-15.754-44.505s-32.689-12.603-38.991-25.6  c-5.908-12.603,7.877-33.083,4.726-47.262c-3.938-13.785-24.812-25.994-24.812-40.566s20.874-26.782,24.025-40.566  c3.151-14.178-10.634-34.265-4.726-47.262c6.302-12.997,30.326-14.572,38.991-25.6s4.726-35.446,15.754-44.505  s33.083,0.394,45.686-5.908c12.603-6.302,19.298-29.932,33.083-33.083c13.391-3.151,29.538,14.966,43.717,14.966  c14.178,0,30.326-18.117,43.717-14.966c13.785,3.151,20.48,26.782,33.083,33.083c12.603,6.302,35.052-3.151,45.686,5.908  c11.028,9.058,7.089,33.477,15.754,44.505s32.689,12.603,38.991,25.6c5.908,12.603-7.877,33.083-4.726,47.262  C428.296,170.511,449.17,182.72,449.17,197.292z"/>
								<path style="fill:#D7B354;" d="M252.247,118.523c-43.717,0-78.769,35.446-78.769,78.769s35.446,78.769,78.769,78.769  c43.717,0,78.769-35.446,78.769-78.769S295.963,118.523,252.247,118.523z M252.247,232.738c-19.692,0-35.446-15.754-35.446-35.446  s15.754-35.446,35.446-35.446s35.446,15.754,35.446,35.446S271.939,232.738,252.247,232.738z M252.247,55.507  c-78.375,0-141.785,63.409-141.785,141.785s63.409,141.785,141.785,141.785s141.784-63.41,141.784-141.785  S330.622,55.507,252.247,55.507z M252.247,315.446c-65.378,0-118.154-52.775-118.154-118.154S186.868,79.138,252.247,79.138  s118.154,52.775,118.154,118.154S317.625,315.446,252.247,315.446z"/>
							</g>
						</svg>
					</div>
					<div class="">
						
					</div>
		    </div>
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
  padding: 40px 0px 15px 0px;
  border-radius: 5px 5px 0 0;
  font-weight: bold;
  text-transform: uppercase;
  border-bottom: 5px solid;
}
.subtitle-section {
  font-size: 1.2rem;
  color: #ffffff;
  border-radius: 5px;
  font-weight: bold;
  text-transform: uppercase;
  margin: 30px 0 0px 0;
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
  font-size: 1.3rem;
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

.content-solution-image {
  width: 200px;
  margin: auto;
  margin-bottom: 20px;
}

.hand-puzzle {
	animation: moveHandle 5s ease infinite;
}

.puzzle-blue {
	transform: translateX(159px) translateY(-2px);
}

.card-participate {
  text-align: center;
  margin: auto;
  background: #ffffff;
	& img {
  	display: block;
    margin: auto;
    width: 100px;
    padding: 1em;
    box-sizing: content-box;
  }
}

// bg #ffd422
.card-title-participate {
  text-align: center;
  height: 40px;
  line-height: 40px;
  background: #FFF59D;
  color: #071a31;
  padding: 0 5px;
  & .title {
    font-size: 1.3rem;
    font-weight: bold;
    text-transform: uppercase;
	}
}

.card-info-participate {
  padding: .5em;
  color: #ffffff;
  font-size: 1.2rem;
}
.container-participate {
    position: relative;
}
</style>
