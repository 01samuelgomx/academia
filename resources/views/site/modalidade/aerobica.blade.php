@extends('layout.layout')
@section('modalidade', 'aerobica')
@section('conteudo')
    <!--==============================
        Breadcumb
        ============================== -->
        <div class="breadcumb-wrapper" data-bg-src="{{ asset('img/breadcrumb-bg.png') }}">
          <!-- bg animated image/ -->
          <div class="container">
              <div class="row">
                  <div class="col-lg-12">
                      <div class="breadcumb-content">
                          <h1 class="breadcumb-title">Aerobica</h1>
                          <ul class="breadcumb-menu">
                            <li><a href="{{ url('/') }}">Início</a></li>
                            <li class="{{ url('/modalidade') }}">Modalidae</li>
                          </ul>
                      </div>
                  </div>
              </div>
  
          </div>
      </div>
    <!--==============================
      Service Area 02  
      ==============================-->
      <div class="service-details-area space-top space-extra-bottom overflow-hidden">
          <div class="container">
              <div class="row">
                  <div class="col-xxl-8 col-lg-7">
                      <div class="service-page-single">
                          <div class="page-img mb-50">
                              <img src="{{ asset('img/aerobica.jpeg') }}" alt="img">
                          </div>
                          <div class="page-content">
                              <h2 class="page-title">Alcance seus Objetivos com Energia e Estilo!</h2>
                              <p class="mb-30">No universo da aeróbica, a chave para conquistar uma forma física desejada é o treino dinâmico e energético. Nosso programa é especialmente desenvolvido para entusiastas da aeróbica que buscam mais do que simplesmente melhorar a estética – almejam funcionalidade, resistência e alegria no movimento. Se você é uma pessoa dedicada à busca por uma saúde vibrante e uma forma física impressionante, nossa abordagem de treino em aeróbica está aqui para elevar sua experiência ao próximo patamar.
                              </p>
                              <p class="mb-50">Entendemos que a aeróbica vai além dos resultados físicos; é uma celebração do movimento e da saúde. Nossa abordagem visa não apenas esculpir o corpo, mas também promover alegria e vitalidade em cada sessão de treino.Contamos com uma equipe de instrutores altamente especializados em aeróbica, prontos para oferecer orientação personalizada. Desde ajustes na postura e movimentos até dicas de alimentação saudável, nossa equipe está empenhada em impulsionar o seu sucesso na jornada da aeróbica.</p>
                              <h3 class="page-subtitle mb-0">Por que nos escolher?</h3>
                              <p>Há várias razões para nos escolher:</p>
                              <div class="row">
                                  <div class="col-sm-6">
                                      <div class="service-wrap">
                                          <h6><i class="far fa-check me-2"></i> Variedade de Serviços:</h6>
                                          <p>Oferecemos uma ampla gama de serviços e programas de fitness para atender a
                                              diferentes níveis de condicionamento físico, interesses e objetivos.</p>
                                      </div>
                                  </div>
                                  <div class="col-sm-6">
                                      <div class="service-wrap">
                                          <h6><i class="far fa-check me-2"></i> Expertise e Experiência:</h6>
                                          <p>Temos uma equipe de profissionais de fitness altamente qualificados e experientes
                                              dedicados a ajudá-lo...</p>
                                      </div>
                                  </div>
                              </div>
                              <p class="mt-25 mb-50">Oferecemos uma ampla gama de serviços e programas de fitness para atender
                                  a diferentes níveis de condicionamento físico, interesses e objetivos. Esteja você
                                  procurando treinamento pessoal, aulas de fitness em grupo, treinos especializados ou
                                  orientação nutricional, temos opções para atender às suas necessidades.</p>
                              <h3 class="page-subtitle mb-0">Por que nos escolher?</h3>
                              <div class="service-page-list checklist mb-50"
                                  data-bg-src="{{ asset('img/footer-1-bg.png') }}">
                                  <ul>
                                      <li><i class="far fa-check-circle"></i>Elaboração de programa de treino.</li>
                                      <li><i class="far fa-check-circle"></i>Sobrecarga progressiva.</li>
                                      <li><i class="far fa-check-circle"></i>Foco na forma correta.</li>
                                      <li><i class="far fa-check-circle"></i>Consistência no treinamento.</li>
                                      <li><i class="far fa-check-circle"></i>Ajustar a ingestão calórica conforme necessário.
                                      </li>
                                  </ul>
                              </div>
                              <div class="accordion-area mb-30 accordion" id="faqAccordion">
                                  <div class="accordion-card style2 active">
                                      <div class="accordion-header" id="collapse-item-1">
                                          <button class="accordion-button " type="button" data-bs-toggle="collapse"
                                              data-bs-target="#collapse-1" aria-expanded="true"
                                              aria-controls="collapse-1">Quais são os horários de funcionamento da
                                              academia?</button>
                                      </div>
                                      <div id="collapse-1" class="accordion-collapse collapse show"
                                          aria-labelledby="collapse-item-1" data-bs-parent="#faqAccordion">
                                          <div class="accordion-body">
                                              <p class="faq-text">Comunique progressivamente o capital humano flexível com
                                                  esquemas de última geração. Desenvolva completamente infraestruturas 2.0 por
                                                  meio de oportunidades de ponta. Inicie completamente habilidades de
                                                  liderança de classe mundial por meio de aplicações totalmente testadas.</p>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="accordion-card style2">
                                      <div class="accordion-header" id="collapse-item-2">
                                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                              data-bs-target="#collapse-2" aria-expanded="false"
                                              aria-controls="collapse-2">Quais amenidades e instalações sua academia
                                              oferece?</button>
                                      </div>
                                      <div id="collapse-2" class="accordion-collapse collapse "
                                          aria-labelledby="collapse-item-2" data-bs-parent="#faqAccordion">
                                          <div class="accordion-body">
                                              <p class="faq-text">Comunique progressivamente o capital humano flexível com
                                                  esquemas de última geração. Desenvolva completamente infraestruturas 2.0 por
                                                  meio de oportunidades de ponta. Inicie completamente habilidades de
                                                  liderança de classe mundial por meio de aplicações totalmente testadas.</p>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="accordion-card style2">
                                      <div class="accordion-header" id="collapse-item-3">
                                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                              data-bs-target="#collapse-3" aria-expanded="false"
                                              aria-controls="collapse-3">Vocês oferecem serviços de treinamento
                                              pessoal?</button>
                                      </div>
                                      <div id="collapse-3" class="accordion-collapse collapse "
                                          aria-labelledby="collapse-item-3" data-bs-parent="#faqAccordion">
                                          <div class="accordion-body">
                                              <p class="faq-text">Comunique progressivamente o capital humano flexível com
                                                  esquemas de última geração. Desenvolva completamente infraestruturas 2.0 por
                                                  meio de oportunidades de ponta. Inicie completamente habilidades de
                                                  liderança de classe mundial por meio de aplicações totalmente testadas. </p>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-xxl-4 col-lg-5">
                    <aside class="sidebar-area">
                        <div class="widget widget_categories">
                            <h3 class="widget_title">Todos os Serviços</h3>
                            <ul>
                                <li>
                                    <a href="blog.html"><i class="fa-solid fa-arrow-right"></i>Aula de Fitness na Academia</a>
                                </li>
                                <li>
                                    <a href="blog.html"><i class="fa-solid fa-arrow-right"></i>Aula de Levantamento de Peso</a>
                                </li>
                                <li>
                                    <a href="blog.html"><i class="fa-solid fa-arrow-right"></i>Body Building</a>
                                </li>
                                <li>
                                    <a href="blog.html"><i class="fa-solid fa-arrow-right"></i>Aula de Boxe</a>
                                </li>
                                <li>
                                    <a href="blog.html"><i class="fa-solid fa-arrow-right"></i>Aula de Meditação</a>
                                </li>
                            </ul>
                        </div>
                        <div class="widget widget_schedule">
                            <h3 class="widget_title">Horário de Funcionamento</h3>
                            <ul>
                                <li>
                                    <i class="far fa-clock"></i>
                                    Segunda-feira a Sexta-feira, das 13h00 às 14h00
                                </li>
                                <li>
                                    <i class="far fa-clock"></i>
                                    Sábado, das 8h00 às 12h00
                                </li>
                                <li class="unavailable">
                                    <i class="far fa-clock"></i>
                                    Domingo fechado
                                </li>
                            </ul>
                        </div>
                    </aside>
                </div>
                
              </div>
          </div>
      </div>
@endsection