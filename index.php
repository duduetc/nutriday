<?php
$counterFile = __DIR__ . '/contador-visitas.txt';
$visitCount = 1;
$handle = @fopen($counterFile, 'c+');

if ($handle !== false) {
  if (flock($handle, LOCK_EX)) {
    rewind($handle);
    $savedValue = trim(stream_get_contents($handle));
    $visitCount = ctype_digit($savedValue) ? ((int) $savedValue + 1) : 1;
    rewind($handle);
    ftruncate($handle, 0);
    fwrite($handle, (string) $visitCount);
    fflush($handle);
    flock($handle, LOCK_UN);
  }
  fclose($handle);
}
?>
<!doctype html>
<html lang="pt-BR">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="v11.css" />
  <title>NUTRIDAY | Nutrição Clínica e Genética</title>
  <meta name="description" content="NUTRIDAY — nutrição clínica, nutrigenética e cuidado individual em Brasília." />
  <meta name="version" content="V11" />
  <link rel="shortcut icon" href="favicon.svg" />
  <link rel="icon" href="favicon.svg" />
  <style>
    .footer-bottom::after {
      content: "Versão V11";
      opacity: 0.62;
      font-size: 0.72em;
      letter-spacing: 0.08em;
      text-transform: uppercase;
    }

    .visit-counter {
      opacity: 1;
      color: #f8f6f0;
      background: rgba(181, 149, 87, 0.18);
      border: 1px solid rgba(218, 201, 164, 0.55);
      border-radius: 999px;
      min-width: 210px;
      padding: 10px 18px;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      gap: 10px;
      white-space: nowrap;
    }

    .visit-counter-label {
      color: #dac9a4;
      font-size: 12px;
      font-weight: 700;
      letter-spacing: 0.10em;
      text-transform: uppercase;
    }

    .visit-counter-number {
      color: #ffffff;
      font-size: 23px;
      font-weight: 800;
      line-height: 1;
    }

    @media (max-width: 700px) {
      .visit-counter {
        min-width: 190px;
        padding: 10px 16px;
      }

      .visit-counter-number {
        font-size: 21px;
      }
    }
  </style>
</head>

<body class="__variable_geist_0u6v6a2 __variable_geist_mono_0r2upu1 antialiased">
  <main>
    <div class="top-note">NUTRIDAY · Nutrição Clínica e Genética</div>
    <header class="site-header shell">
      <a class="brand" aria-label="NUTRIDAY - início"><img src="/logo-nutriday.png"
          alt="NUTRIDAY - Nutrição Clínica e Genética" width="846" height="414" loading="eager" fetchpriority="high"
          decoding="async" /></a>
      <nav class="desktop-nav" aria-label="Navegação principal">
        <a href="#metodo">A NUTRIDAY</a><a href="#profissional">Quem sou</a><a href="#testes">Testes</a><a
          href="#jornada">Como funciona</a><a href="#contato">Contato</a>
      </nav>
      <a class="header-login" href="#contato">Falar com a clínica <span>↗</span></a>
    </header>
    <section class="hero shell" id="inicio">
      <div class="hero-copy">
        <div class="eyebrow">
          <span></span> Cuidado individual, de verdade
        </div>
        <h1>Ciência para cuidar de você, <em>com leveza.</em></h1>
        <p class="hero-lead">
          Nutrição clínica e genética em uma experiência acolhedora, elegante
          e personalizada — pensada para fazer sentido na sua vida.
        </p>
        <div class="hero-actions">
          <a class="btn-primary" href="#contato">Quero conhecer a NUTRIDAY <span>→</span></a><a class="text-link"
            href="#testes">Conhecer os testes <span>↗</span></a>
        </div>
        <div class="hero-signature">
          <span>Clínica</span><i></i> <span>Genética</span><i></i>
          <span>Acompanhamento</span>
        </div>
      </div>
      <div class="hero-visual" aria-label="Composição editorial de alimentos naturais">
        <div class="hero-frame">
          <img src="/hero-natriday.webp" alt="Composição elegante com alimentos frescos e elementos naturais"
            loading="eager" fetchpriority="high" decoding="async" sizes="(max-width: 900px) 100vw, 48vw" style="
                position: absolute;
                inset: 0;
                width: 100%;
                height: 100%;
                object-fit: cover;
              " />
        </div>
        <div class="floating-card">
          <span class="floating-mark">N</span>
          <div>
            <small>NUTRIDAY</small><strong>Nutrir é entender.</strong>
          </div>
        </div>
        <div class="gold-orbit" aria-hidden="true"></div>
      </div>
    </section>
    <section class="manifesto shell motion-reveal" id="metodo">
      <div class="section-kicker">Nossa forma de cuidar</div>
      <div class="manifesto-grid">
        <h2>
          Você não é um protocolo.<br /><em>É uma história inteira.</em>
        </h2>
        <div>
          <p>
            Na NUTRIDAY, informação clínica, ciência e escuta caminham juntas.
            O cuidado começa entendendo quem você é — não apenas olhando dados
            isolados.
          </p>
          <a href="#jornada" class="under-link">Conheça nossa abordagem <span>→</span></a>
        </div>
      </div>
    </section>
    <section class="doctor shell motion-reveal" id="profissional">
      <div class="doctor-photo">
        <img src="/doutora-natriday-hq.webp" alt="Nutricionista da NUTRIDAY em seu consultório" loading="lazy"
          decoding="async" sizes="(max-width: 900px) 100vw, 48vw" style="
              position: absolute;
              inset: 0;
              width: 100%;
              height: 100%;
              object-fit: cover;
            " /><span class="doctor-seal">17 anos<br />de cuidado</span>
      </div>
      <div class="doctor-copy">
        <div class="section-kicker">Quem eu sou?</div>
        <h2>
          Experiência clínica com um olhar
          <em>verdadeiramente individual.</em>
        </h2>
        <p class="doctor-intro">
          Uma trajetória dedicada a transformar ciência, escuta e conhecimento
          do paciente em orientações que façam sentido na vida real.
        </p>
        <div class="doctor-credentials">
          <div>
            <span>01</span>
            <p>Nutricionista Clínica e <strong>Nutrigeneticista</strong></p>
          </div>
          <div>
            <span>02</span>
            <p><strong>Fitoterapeuta</strong></p>
          </div>
          <div>
            <span>03</span>
            <p>
              <strong>17 anos</strong> de atuação em consultórios e Home Care
            </p>
          </div>
          <div>
            <span>04</span>
            <p>
              Personal Diet especialista em <strong>emagrecimento</strong>
            </p>
          </div>
          <div>
            <span>05</span>
            <p><strong>Palestrante</strong></p>
          </div>
        </div>
      </div>
    </section>
    <section class="pillars shell motion-reveal" id="experiencia">
      <article class="pillar-card">
        <div class="pillar-icon" aria-hidden="true"><span></span></div>
        <h3>Nutrição clínica</h3>
        <p>
          Uma leitura cuidadosa da sua rotina, preferências e contexto de
          saúde para orientar escolhas possíveis no dia a dia.
        </p>
        <span class="card-arrow">↗</span>
      </article>
      <article class="pillar-card">
        <div class="pillar-icon" aria-hidden="true"><span></span></div>
        <h3>Nutrição &amp; genética</h3>
        <p>
          Informações individuais como apoio a uma estratégia nutricional mais
          personalizada, sempre com contexto clínico.
        </p>
        <span class="card-arrow">↗</span>
      </article>
      <article class="pillar-card">
        <div class="pillar-icon" aria-hidden="true"><span></span></div>
        <h3>Acompanhamento contínuo</h3>
        <p>
          Orientações claras, revisões e proximidade para que o cuidado evolua
          junto com a sua rotina.
        </p>
        <span class="card-arrow">↗</span>
      </article>
    </section>
    <section class="tests shell motion-reveal tests-v11" id="testes">
      <div class="tests-heading">
        <div class="section-kicker">Testes personalizados</div>
        <h2>Conheça melhor o seu organismo para um cuidado <em>mais individual.</em></h2>
        <p>
          Três avaliações complementares que ajudam a compreender necessidades
          individuais e a personalizar o acompanhamento nutricional.
        </p>
      </div>
      <div class="tests-grid">
        <article class="test-card">
          <div class="test-image">
            <img src="/hipersensibilidade-alimentar.webp" alt="Alimentos naturais apresentados em uma avaliação clínica"
              loading="lazy" decoding="async" sizes="(max-width: 900px) 100vw, 33vw" style="
                  position: absolute;
                  inset: 0;
                  width: 100%;
                  height: 100%;
                  object-fit: cover;
                " />
          </div>
          <div class="test-content">
            <small>Alimentação &amp; resposta individual</small>
            <h3>Hipersensibilidade alimentar</h3>
            <p class="test-lead">
              Avaliação voltada à investigação de possíveis reações relacionadas
              ao consumo de determinados alimentos.
            </p>
            <details>
              <summary>Entenda como funciona <span>+</span></summary>
              <div class="test-details">
                <p>
                  Os achados são interpretados em conjunto com os sintomas, o
                  histórico clínico e a rotina alimentar do paciente.
                </p>
                <p>
                  A consulta transforma essas informações em orientações
                  nutricionais individualizadas, sem exclusões alimentares
                  indiscriminadas.
                </p>
              </div>
            </details>
            <a class="test-cta"
              href="https://wa.me/5561996748315?text=Ol%C3%A1%2C%20quero%20saber%20mais%20sobre%20a%20avalia%C3%A7%C3%A3o%20de%20hipersensibilidade%20alimentar."
              target="_blank" rel="noreferrer">Quero saber mais <span>→</span></a>
            <p class="test-phrase">
              Interpretação profissional dentro do contexto de cada paciente.
            </p>
          </div>
        </article>
        <article class="test-card">
          <div class="test-image">
            <img src="/teste-nutrigenetico.webp" alt="Representação de DNA associada à nutrição personalizada"
              loading="lazy" decoding="async" sizes="(max-width: 900px) 100vw, 33vw" style="
                  position: absolute;
                  inset: 0;
                  width: 100%;
                  height: 100%;
                  object-fit: cover;
                " />
          </div>
          <div class="test-content">
            <small>Nutrição &amp; genética</small>
            <h3>Teste nutrigenético</h3>
            <p class="test-lead">
              Analisa características genéticas que podem influenciar a forma
              como o organismo responde aos nutrientes.
            </p>
            <details>
              <summary>Entenda como funciona <span>+</span></summary>
              <div class="test-details">
                <p>
                  O resultado oferece informações relacionadas ao metabolismo e
                  à resposta individual a nutrientes.
                </p>
                <p>
                  Na consulta, esses dados são combinados com a história, os
                  exames e a rotina para orientar uma estratégia alimentar mais
                  personalizada.
                </p>
              </div>
            </details>
            <a class="test-cta"
              href="https://wa.me/5561996748315?text=Ol%C3%A1%2C%20quero%20saber%20mais%20sobre%20o%20teste%20nutrigen%C3%A9tico."
              target="_blank" rel="noreferrer">Quero saber mais <span>→</span></a>
            <p class="test-phrase">
              Informações do DNA aplicadas ao acompanhamento nutricional.
            </p>
          </div>
        </article>
        <article class="test-card">
          <div class="test-image">
            <img src="/teste-microbiota-intestinal.webp" alt="Ilustração científica delicada da microbiota intestinal"
              loading="lazy" decoding="async" sizes="(max-width: 900px) 100vw, 33vw" style="
                  position: absolute;
                  inset: 0;
                  width: 100%;
                  height: 100%;
                  object-fit: cover;
                " />
          </div>
          <div class="test-content">
            <small>Equilíbrio &amp; saúde intestinal</small>
            <h3>Teste de microbiota intestinal</h3>
            <p class="test-lead">
              Avalia a composição da microbiota e auxilia na compreensão do
              equilíbrio do intestino.
            </p>
            <details>
              <summary>Entenda como funciona <span>+</span></summary>
              <div class="test-details">
                <p>
                  O perfil dos microrganismos é analisado em conjunto com os
                  sintomas, a alimentação e o histórico clínico.
                </p>
                <p>
                  Essa leitura orienta estratégias nutricionais personalizadas,
                  de acordo com as necessidades de cada paciente.
                </p>
              </div>
            </details>
            <a class="test-cta"
              href="https://wa.me/5561996748315?text=Ol%C3%A1%2C%20quero%20saber%20mais%20sobre%20o%20teste%20de%20microbiota%20intestinal."
              target="_blank" rel="noreferrer">Quero saber mais <span>→</span></a>
            <p class="test-phrase">
              Uma visão mais completa para cuidar da saúde intestinal.
            </p>
          </div>
        </article>
      </div>
      <p class="tests-disclaimer">
        A indicação e a interpretação de exames devem considerar a avaliação
        individual e não substituem diagnóstico ou acompanhamento médico
        quando necessários.
      </p>
    </section>
    <section class="editorial-band motion-reveal">
      <div class="editorial-inner shell">
        <div class="editorial-tag">NUTRIDAY / essencial</div>
        <blockquote>
          “Seu cuidado precisa conversar<br />com a sua <em>vida real.</em>”
        </blockquote>
        <p>
          Sem fórmulas prontas. Com estratégia, contexto e uma relação mais
          tranquila com a própria rotina.
        </p>
      </div>
    </section>
    <section class="journey shell motion-reveal" id="jornada">
      <div class="journey-heading">
        <div class="section-kicker">Sua jornada</div>
        <h2>Simples por fora.<br /><em>Profundo no cuidado.</em></h2>
      </div>
      <div class="journey-list">
        <article>
          <span class="journey-nr">01</span>
          <h3>Escutar</h3>
          <p>
            A consulta começa pela sua história, sua rotina e o que faz
            sentido para você.
          </p>
        </article>
        <article>
          <span class="journey-nr">02</span>
          <h3>Personalizar</h3>
          <p>
            A estratégia é construída com clareza, ciência e escolhas que
            cabem na vida real.
          </p>
        </article>
        <article>
          <span class="journey-nr">03</span>
          <h3>Acompanhar</h3>
          <p>
            A evolução acontece com ajustes, orientação profissional e
            continuidade.
          </p>
        </article>
      </div>
    </section>
    <section class="testimonials motion-reveal" id="depoimentos">
      <div class="shell testimonials-heading">
        <div>
          <div class="section-kicker">Histórias reais</div>
          <h2>O cuidado contado por <em>quem viveu a experiência.</em></h2>
        </div>
        <p>
          Relatos reais de pacientes sobre acolhimento, acompanhamento e
          confiança construídos ao longo do cuidado nutricional.
        </p>
      </div>
      <div class="shell testimonials-grid" aria-label="Depoimentos de pacientes">
        <article class="testimonial-card testimonial-1">
          <div class="testimonial-photo">
            <img src="/depoimento-eduarda.webp" alt="Registro do depoimento de Eduarda Gondim" loading="lazy"
              decoding="async" sizes="(max-width: 900px) 80vw, 26vw" style="
                  position: absolute;
                  inset: 0;
                  width: 100%;
                  height: 100%;
                  object-fit: cover;
                " /><span class="testimonial-number">0<!-- -->1</span>
          </div>
          <div class="testimonial-copy">
            <span class="quote-mark" aria-hidden="true">“</span>
            <blockquote>
              Profissional atenciosa, sempre procura o paciente para saber se
              está seguindo direitinho, se há dúvidas… Recomendo de olhos
              fechados!
            </blockquote>
            <div class="testimonial-person">
              <strong>Eduarda Gondim</strong><small>Paciente NUTRIDAY</small>
            </div>
          </div>
        </article>
        <article class="testimonial-card testimonial-2">
          <div class="testimonial-photo">
            <img src="/depoimento-renata.webp" alt="Registro do depoimento de Renata Correia" loading="lazy"
              decoding="async" sizes="(max-width: 900px) 80vw, 26vw" style="
                  position: absolute;
                  inset: 0;
                  width: 100%;
                  height: 100%;
                  object-fit: cover;
                " /><span class="testimonial-number">0<!-- -->2</span>
          </div>
          <div class="testimonial-copy">
            <span class="quote-mark" aria-hidden="true">“</span>
            <blockquote>
              Profissional altamente qualificada, atendimento maravilhoso que
              se segue após a consulta, nos acompanhando de perto na evolução
              da busca pela qualidade de vida.
            </blockquote>
            <div class="testimonial-person">
              <strong>Renata Correia</strong><small>Paciente NUTRIDAY</small>
            </div>
          </div>
        </article>
        <article class="testimonial-card testimonial-3">
          <div class="testimonial-photo">
            <img src="/depoimento-mensagem.webp" alt="Registro do depoimento de Paciente NUTRIDAY" loading="lazy"
              decoding="async" sizes="(max-width: 900px) 80vw, 26vw" style="
                  position: absolute;
                  inset: 0;
                  width: 100%;
                  height: 100%;
                  object-fit: cover;
                " /><span class="testimonial-number">0<!-- -->3</span>
          </div>
          <div class="testimonial-copy">
            <span class="quote-mark" aria-hidden="true">“</span>
            <blockquote>
              A doutora foi muito legal comigo e já sabia muito bem o que eu
              precisava fazer. O atendimento foi esplêndido… Foi uma
              experiência ótima e recomendo.
            </blockquote>
            <div class="testimonial-person">
              <strong>Paciente NUTRIDAY</strong><small>Mensagem real recebida</small>
            </div>
          </div>
        </article>
        <article class="testimonial-card testimonial-4">
          <div class="testimonial-photo">
            <img src="/depoimento-fabiana.webp" alt="Registro do depoimento de Fabiana Martins" loading="lazy"
              decoding="async" sizes="(max-width: 900px) 80vw, 26vw" style="
                  position: absolute;
                  inset: 0;
                  width: 100%;
                  height: 100%;
                  object-fit: cover;
                " /><span class="testimonial-number">0<!-- -->4</span>
          </div>
          <div class="testimonial-copy">
            <span class="quote-mark" aria-hidden="true">“</span>
            <blockquote>
              A Dayanne é maravilhosa! Ela é minha nutricionista desde 2015.
            </blockquote>
            <div class="testimonial-person">
              <strong>Fabiana Martins</strong><small>Paciente NUTRIDAY desde 2015</small>
            </div>
          </div>
        </article>
      </div>
      <div class="shell testimonials-note">
        Depoimentos compartilhados com a clínica · Experiências individuais
        podem variar.
      </div>
    </section>
    <section class="contact shell motion-reveal" id="contato">
      <div class="contact-card">
        <div class="contact-main">
          <div class="section-kicker">Um cuidado feito para você</div>
          <h2>
            Vamos começar uma nova forma de <em>olhar para a sua saúde?</em>
          </h2>
          <p>
            Clínica de Nutrição e Genética. Dieta personalizada segundo o
            perfil genético.
          </p>
          <div class="contact-actions">
            <a class="btn-primary whatsapp-button" href="https://wa.me/5561996748315" target="_blank"
              rel="noreferrer">Falar no WhatsApp <span>→</span></a><span class="contact-note">(61) 99674-8315</span>
            <a class="contact-instagram" href="https://www.instagram.com/nutridayannarosa_/" target="_blank"
              rel="noreferrer" aria-label="Abrir o Instagram da NUTRIDAY">Instagram <strong>@nutridayannarosa_</strong>
              <span>↗</span></a>
          </div>
        </div>
        <div class="clinic-info">
          <div class="clinic-info-head">
            <small>Atendimento presencial</small><strong>Brasília · DF</strong>
          </div>
          <div class="clinic-hours">
            <div><span>Terça-feira</span><strong>14:00 – 19:00</strong></div>
            <div><span>Quinta-feira</span><strong>14:00 – 19:00</strong></div>
            <div><span>Sexta-feira</span><strong>14:00 – 18:00</strong></div>
            <div class="closed-days">
              <span>Seg · Qua · Sáb · Dom</span><strong>Fechada</strong>
            </div>
          </div>
          <div class="clinic-address">
            <small>Endereço</small>
            <p>
              Edifício Central Park, sala 1909<br />Asa Norte · Brasília, DF
            </p>
            <a href="https://www.google.com/maps/search/Edifício+Central+Park,+sala+1909.+++Asa+Norte/@-15.7877,-47.8824,17z?hl=pt-BR&amp;entry=ttu&amp;g_ep=EgoyMDI2MDgwNC4wIKXMDSoASAFQAw%3D%3D"
              target="_blank" rel="noreferrer">Ver localização no Google Maps <span>↗</span></a>
          </div>
        </div>
      </div>
    </section>
    <footer class="footer">
      <div class="shell footer-grid">
        <div class="footer-brand">
          <a href="#inicio" class="footer-wordmark"
            aria-label="NUTRIDAY - início"><span>N</span><strong>NUTRIDAY</strong></a>
          <p>Nutrição Clínica e Genética</p>
          <em>Cuidar de você é o que me move.</em>
        </div>
        <div>
          <small>Explorar</small><a href="#profissional">Quem sou</a><a href="#testes">Testes</a><a
            href="#depoimentos">Depoimentos</a><a href="#jornada">Como funciona</a><a href="#contato">Contato</a>
        </div>
        <div class="footer-contact">
          <small>Contato</small><a class="footer-whatsapp" href="https://wa.me/5561996748315" target="_blank"
            rel="noreferrer"><b>WhatsApp</b><span>(61) 99674-8315</span></a><span>Ed. Central Park · sala 1909<br />Asa
            Norte · Brasília, DF</span><a class="footer-instagram" href="https://www.instagram.com/nutridayannarosa_/"
            target="_blank" rel="noreferrer">Instagram <strong>@nutridayannarosa_</strong> <span>↗</span></a><a
            class="footer-map"
            href="https://www.google.com/maps/search/Edifício+Central+Park,+sala+1909.+++Asa+Norte/@-15.7877,-47.8824,17z?hl=pt-BR&amp;entry=ttu&amp;g_ep=EgoyMDI2MDgwNC4wIKXMDSoASAFQAw%3D%3D"
            target="_blank" rel="noreferrer">Como chegar <span>↗</span></a>
        </div>
      </div>
      <div class="shell footer-bottom">
        <span>© 2026 NUTRIDAY</span><span>Nutrição clínica, genética e cuidado individual.</span>
        <span class="visit-counter" aria-label="Total de visitas ao site">
          <span class="visit-counter-label">Visitas ao site</span>
          <strong class="visit-counter-number"><?php echo number_format($visitCount, 0, ',', '.'); ?></strong>
        </span>
      </div>
    </footer>
  </main>

  <!-- Botão flutuante WhatsApp -->
  <a class="whatsapp-float" href="https://wa.me/5561996748315" target="_blank"
    rel="noopener" aria-label="Falar no WhatsApp">
    <svg viewBox="0 0 24 24" width="28" height="28" fill="white"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51h-.57c-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.086 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
  </a>

</body>

</html>