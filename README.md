# microservices-in-symfony
in this tutoriel we make 2 microservice , the first one is to send message to messenger queue and the second will consume this message , we use symfony messgener and amqp for rabitmq transport
# Installations
- clone project
- you must enable amqp in php.ini localy
- run sudo docker-compose up --build -d
 <div class="snippet-clipboard-content notranslate position-relative overflow-auto"><pre class="notranslate"><code>docker <span>exec</span> -it app2 php bin/console app:send
</code></pre><div class="zeroclipboard-container position-absolute right-0 top-0">
    <clipboard-copy aria-label="Copy" class="ClipboardButton btn js-clipboard-copy m-2 p-0 tooltipped-no-delay" data-copy-feedback="Copied!" data-tooltip-direction="w" value="docker exec -it app2 php bin/console app:send" tabindex="0" role="button" style="display: inherit;">
      <svg aria-hidden="true" height="16" viewBox="0 0 16 16" version="1.1" width="16" data-view-component="true" class="octicon octicon-copy js-clipboard-copy-icon m-2">
    <path fill-rule="evenodd" d="M0 6.75C0 5.784.784 5 1.75 5h1.5a.75.75 0 010 1.5h-1.5a.25.25 0 00-.25.25v7.5c0 .138.112.25.25.25h7.5a.25.25 0 00.25-.25v-1.5a.75.75 0 011.5 0v1.5A1.75 1.75 0 019.25 16h-7.5A1.75 1.75 0 010 14.25v-7.5z"></path><path fill-rule="evenodd" d="M5 1.75C5 .784 5.784 0 6.75 0h7.5C15.216 0 16 .784 16 1.75v7.5A1.75 1.75 0 0114.25 11h-7.5A1.75 1.75 0 015 9.25v-7.5zm1.75-.25a.25.25 0 00-.25.25v7.5c0 .138.112.25.25.25h7.5a.25.25 0 00.25-.25v-7.5a.25.25 0 00-.25-.25h-7.5z"></path>
</svg>
      <svg aria-hidden="true" height="16" viewBox="0 0 16 16" version="1.1" width="16" data-view-component="true" class="octicon octicon-check js-clipboard-check-icon color-fg-success d-none m-2">
    <path fill-rule="evenodd" d="M13.78 4.22a.75.75 0 010 1.06l-7.25 7.25a.75.75 0 01-1.06 0L2.22 9.28a.75.75 0 011.06-1.06L6 10.94l6.72-6.72a.75.75 0 011.06 0z"></path>
</svg>
    </clipboard-copy>
  </div></div>
<div class="snippet-clipboard-content notranslate position-relative overflow-auto"><pre class="notranslate"><code>docker <span>exec</span> -it app1 php bin/console messenger:consume -vv external_messages
</code></pre><div class="zeroclipboard-container position-absolute right-0 top-0">
    <clipboard-copy aria-label="Copy" class="ClipboardButton btn js-clipboard-copy m-2 p-0 tooltipped-no-delay" data-copy-feedback="Copied!" data-tooltip-direction="w" value="docker exec -it app2 php bin/console app:send" tabindex="0" role="button" style="display: inherit;">
      <svg aria-hidden="true" height="16" viewBox="0 0 16 16" version="1.1" width="16" data-view-component="true" class="octicon octicon-copy js-clipboard-copy-icon m-2">
    <path fill-rule="evenodd" d="M0 6.75C0 5.784.784 5 1.75 5h1.5a.75.75 0 010 1.5h-1.5a.25.25 0 00-.25.25v7.5c0 .138.112.25.25.25h7.5a.25.25 0 00.25-.25v-1.5a.75.75 0 011.5 0v1.5A1.75 1.75 0 019.25 16h-7.5A1.75 1.75 0 010 14.25v-7.5z"></path><path fill-rule="evenodd" d="M5 1.75C5 .784 5.784 0 6.75 0h7.5C15.216 0 16 .784 16 1.75v7.5A1.75 1.75 0 0114.25 11h-7.5A1.75 1.75 0 015 9.25v-7.5zm1.75-.25a.25.25 0 00-.25.25v7.5c0 .138.112.25.25.25h7.5a.25.25 0 00.25-.25v-7.5a.25.25 0 00-.25-.25h-7.5z"></path>
</svg>
      <svg aria-hidden="true" height="16" viewBox="0 0 16 16" version="1.1" width="16" data-view-component="true" class="octicon octicon-check js-clipboard-check-icon color-fg-success d-none m-2">
    <path fill-rule="evenodd" d="M13.78 4.22a.75.75 0 010 1.06l-7.25 7.25a.75.75 0 01-1.06 0L2.22 9.28a.75.75 0 011.06-1.06L6 10.94l6.72-6.72a.75.75 0 011.06 0z"></path>
</svg>
    </clipboard-copy>
  </div></div>
  
  # Documentation details
  
<div >
	<br>
	<a href="https://github.com/sindresorhus/css-in-readme-like-wat/blame/main/header.svg">
		<img src="https://github.com/sindresorhus/css-in-readme-like-wat/blame/main/header.svg](https://css-tricks.com/wp-content/uploads/2020/12/header.svg" width="800" height="400" alt="Click to see the source">
	</a>
	<br>
</div>



<br>
<br>
<br>
<br>
<br>
<br>
Explanation: https://css-tricks.com/custom-styles-in-github-readmes/
<div class="nuxt-content"><p>Modern application architecture has forced developers to change the way of thinking about the communication between different components of IT systems. Once the matter was simpler - most systems were created as monolithic structures connected with each other by a network of business logic connections. Maintaining such dependencies in a <strong>PHP project</strong> was a huge challenge for <strong>PHP developers</strong>, and the growing popularity of SaaS solutions and the huge increase in the popularity of cloud services caused that today we hear more and more about microservices and application modularity.</p>
<p>Just how, by creating independent microservices, can we make them exchange information with each other? 🤔</p>
<p>This article is the first in a series of posts on <strong>microservices communication in Symfony</strong> framework and it covers the most popular way - AMQP communication using RabbitMQ.</p>
<h2>Goal</h2>
<p>To create two independent applications and achieve communication between them using only Message Bus.</p>
<h2>The Concept</h2>
<p>We have two, imaginary, independent applications:</p>
<ul>
<li><code>app1</code>: which sends E-Mail and SMS notifications to employees</li>
<li><code>app2</code>: which allows you to manage employee's work and assign them tasks.</li>
</ul>
<p>We want to create a modern and simple system whereby the assignment of work to an employee in <code>app2</code> will send a notification to the customer using <code>app1</code>. Despite appearances, this is very simple!</p>
<h2> Preparation</h2>
<p>For the purpose of this article, we will use the latest Symfony(version 6.1 at the time of writing) and the latest version of PHP (8.1). In a few very simple steps we will create a working local Docker environment with two microservices. All you need is:</p>
<ul>
<li>a working computer,</li>
<li>installed Docker + <a href="https://docs.docker.com/compose/" rel="noopener dofollow" target="_blank">Docker Compose environment</a></li>
<li>and a locally configured <a href="https://symfony.com/download" rel="noopener dofollow" target="_blank">Symfony CLI</a> and some free time.</li>
</ul>
<h2> Runtime environment</h2>
<p>We will use Docker's capabilities as an application virtualization and containerization tool. Let's start by creating a directory tree, a framework for two <strong>Symfony applications</strong>, and describe the infrastructure of our environments using the <code>docker-compose.yml</code> file.</p>
<div class="nuxt-content-highlight"><pre class="line-numbers language-shell"><code><span class="token builtin class-name">cd</span> ~
<span class="token function">mkdir</span> microservices-in-symfony
<span class="token builtin class-name">cd</span> microservices-in-symfony
symfony new app1
symfony new app2
<span class="token function">touch</span> docker-compose.yml
</code></pre></div>
<p>We have created two directories for two separate Symfony applications and created an empty <code>docker-compose.yml</code> file to launch our environment.</p>
<p>Let's add the following sections to the <code>docker-compose.yml</code> file:</p>
<div class="nuxt-content-highlight"><pre class="line-numbers language-yaml"><code><span class="token key atrule">version</span><span class="token punctuation">:</span> <span class="token string">'3.8'</span>

<span class="token key atrule">services</span><span class="token punctuation">:</span>
  <span class="token key atrule">app1</span><span class="token punctuation">:</span>
    <span class="token key atrule">container_name</span><span class="token punctuation">:</span> app1
    <span class="token key atrule">build</span><span class="token punctuation">:</span> app1/.
    <span class="token key atrule">restart</span><span class="token punctuation">:</span> on<span class="token punctuation">-</span>failure
    <span class="token key atrule">env_file</span><span class="token punctuation">:</span> app1/.env
    <span class="token key atrule">environment</span><span class="token punctuation">:</span>
      <span class="token key atrule">APP_NAME</span><span class="token punctuation">:</span> app1
    <span class="token key atrule">tty</span><span class="token punctuation">:</span> <span class="token boolean important">true</span>
    <span class="token key atrule">stdin_open</span><span class="token punctuation">:</span> <span class="token boolean important">true</span>

  <span class="token key atrule">app2</span><span class="token punctuation">:</span>
    <span class="token key atrule">container_name</span><span class="token punctuation">:</span> app2
    <span class="token key atrule">build</span><span class="token punctuation">:</span> app2/.
    <span class="token key atrule">restart</span><span class="token punctuation">:</span> on<span class="token punctuation">-</span>failure
    <span class="token key atrule">env_file</span><span class="token punctuation">:</span> app2/.env
    <span class="token key atrule">environment</span><span class="token punctuation">:</span>
      <span class="token key atrule">APP_NAME</span><span class="token punctuation">:</span> app2
    <span class="token key atrule">tty</span><span class="token punctuation">:</span> <span class="token boolean important">true</span>
    <span class="token key atrule">stdin_open</span><span class="token punctuation">:</span> <span class="token boolean important">true</span>

  <span class="token key atrule">rabbitmq</span><span class="token punctuation">:</span>
    <span class="token key atrule">container_name</span><span class="token punctuation">:</span> rabbitmq
    <span class="token key atrule">image</span><span class="token punctuation">:</span> rabbitmq<span class="token punctuation">:</span>management
    <span class="token key atrule">ports</span><span class="token punctuation">:</span>
      <span class="token punctuation">-</span> 15672<span class="token punctuation">:</span><span class="token number">15672</span>
      <span class="token punctuation">-</span> 5672<span class="token punctuation">:</span><span class="token number">5672</span>
    <span class="token key atrule">environment</span><span class="token punctuation">:</span>
      <span class="token punctuation">-</span> RABBITMQ_DEFAULT_USER=user
      <span class="token punctuation">-</span> RABBITMQ_DEFAULT_PASS=password
</code></pre></div>
<p>Source code available directly: <a href="https://github.com/thecodest-co/microservices-in-symfony/blob/main/docker-compose.yml" rel="noopener dofollow" target="_blank">thecodest-co/microservices-in-symfony/blob/main/docker-compose.yml</a></p>
<p>But wait, what happened here? For those unfamiliar with Docker, the above configuration file may seem enigmatic, however its purpose is very simple. Using Docker Compose we are building three "services":</p>
<ul>
<li>app1: which is a container for the first Symfony application</li>
<li>app2: which is the container for the second Symfony application</li>
<li>rabbitmq: the RabbitMQ application image as a communication middleware layer</li>
</ul>
<p>For proper operation, we still need <code>Dockerfile</code> files which are the source to build the images. So let's create them:</p>
<div class="nuxt-content-highlight"><pre class="line-numbers language-shell"><code><span class="token function">touch</span> app1/Dockerfile
<span class="token function">touch</span> app2/Dockerfile
</code></pre></div>
<p>Both files have exactly the same structure and look as follows:</p>
<div class="nuxt-content-highlight"><pre class="line-numbers language-dockerfile"><code><span class="token instruction"><span class="token keyword">FROM</span> php:8.1</span>

<span class="token instruction"><span class="token keyword">COPY</span> <span class="token options"><span class="token property">--from</span><span class="token punctuation">=</span><span class="token string">composer:latest</span></span> /usr/bin/composer /usr/local/bin/composer</span>
<span class="token instruction"><span class="token keyword">COPY</span> . /app/</span>
<span class="token instruction"><span class="token keyword">WORKDIR</span> /app/</span>

<span class="token instruction"><span class="token keyword">ADD</span> https://github.com/mlocati/docker-php-extension-installer/releases/latest/download/install-php-extensions /usr/local/bin/</span>

<span class="token instruction"><span class="token keyword">RUN</span> chmod +x /usr/local/bin/install-php-extensions &amp;&amp; sync &amp;&amp; <span class="token operator">\</span>
    install-php-extensions amqp</span>

<span class="token instruction"><span class="token keyword">RUN</span> apt-get update <span class="token operator">\</span>
  &amp;&amp; apt-get install -y libzip-dev wget --no-install-recommends <span class="token operator">\</span>
  &amp;&amp; apt-get clean <span class="token operator">\</span>
  &amp;&amp; rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*</span>

<span class="token instruction"><span class="token keyword">RUN</span> docker-php-ext-install zip;</span>

<span class="token instruction"><span class="token keyword">CMD</span> bash -c <span class="token string">"cd /app &amp;&amp; composer install &amp;&amp; php -a"</span></span>
</code></pre></div>
<p>Source code available directly: <a href="https://github.com/thecodest-co/microservices-in-symfony/blob/main/app1/Dockerfile" rel="noopener dofollow" target="_blank">/thecodest-co/microservices-in-symfony/blob/main/app1/Dockerfile</a></p>
<p>The above file is used by Docker Compose to build a container from a PHP 8.1 image with Composer and the AMQP extension installed. Additionally, it runs the PHP intepreter in append mode to keep the container running in the background.</p>
<p>Your directory and file tree should now look as follows:</p>
<div class="nuxt-content-highlight"><pre class="line-numbers language-bash"><code><span class="token builtin class-name">.</span>
├── app1
│   └── Dockerfile
<span class="token operator">|</span>       <span class="token punctuation">(</span><span class="token punctuation">..</span>.<span class="token punctuation">)</span> <span class="token comment"># Symfony App Structure</span>
├── app2
│   └── Dockerfile
<span class="token operator">|</span>       <span class="token punctuation">(</span><span class="token punctuation">..</span>.<span class="token punctuation">)</span> <span class="token comment"># Symfony App Structure</span>
└── docker-compose.yml
</code></pre></div>
<h2 id="the-first-symfony-microservice"><a href="#the-first-symfony-microservice" aria-hidden="true" tabindex="-1"><span class="icon icon-link"></span></a>The first Symfony microservice</h2>
<p>Let's start with the <code>app1</code> directory and the first application.
In our example, it is an application that listens and consumes messages from the queue sent by <code>app2</code> as described in the requirements:</p>
<blockquote>
<p>assigning a job to a worker in <code>app2</code> will send a notification to the client</p>
</blockquote>
<p>Let's start by adding the required libraries. AMQP is natively supported for the <code>symfony/messenger</code> extension. We will additionally install <code>monolog/monolog</code> to keep track of system logs for easier application behavior analysis.</p>
<div class="nuxt-content-highlight"><pre class="line-numbers language-shell"><code><span class="token builtin class-name">cd</span> app1/
symfony <span class="token function">composer</span> req amqp ampq-messenger monolog
</code></pre></div>
<p>After the installation, an additional file was added under <code>config/packages/messenger.yaml</code>. It is a configuration file for the Symfony Messenger component and we don't need its <a href="https://symfony.com/doc/current/messenger.html" rel="noopener dofollow" target="_blank">full configuration</a>.
Replace it with the YAML file below:</p>
<div class="nuxt-content-highlight"><pre class="line-numbers language-yaml"><code><span class="token key atrule">framework</span><span class="token punctuation">:</span>
    <span class="token key atrule">messenger</span><span class="token punctuation">:</span>
        <span class="token comment"># Uncomment this (and the failed transport below) to send failed messages to this transport for later handling.</span>
        <span class="token comment"># failure_transport: failed</span>

        <span class="token key atrule">transports</span><span class="token punctuation">:</span>
            <span class="token comment"># https://symfony.com/doc/current/messenger.html#transport-configuration</span>
            <span class="token key atrule">external_messages</span><span class="token punctuation">:</span>
                <span class="token key atrule">dsn</span><span class="token punctuation">:</span> <span class="token string">'%env(MESSENGER_TRANSPORT_DSN)%'</span>
                <span class="token key atrule">options</span><span class="token punctuation">:</span>
                    <span class="token key atrule">auto_setup</span><span class="token punctuation">:</span> <span class="token boolean important">false</span>
                    <span class="token key atrule">exchange</span><span class="token punctuation">:</span>
                        <span class="token key atrule">name</span><span class="token punctuation">:</span> messages
                        <span class="token key atrule">type</span><span class="token punctuation">:</span> direct
                        <span class="token key atrule">default_publish_routing_key</span><span class="token punctuation">:</span> from_external
                    <span class="token key atrule">queues</span><span class="token punctuation">:</span>
                        <span class="token key atrule">messages</span><span class="token punctuation">:</span>
                            <span class="token key atrule">binding_keys</span><span class="token punctuation">:</span> <span class="token punctuation">[</span>from_external<span class="token punctuation">]</span>
</code></pre></div>
<p>Source code available directly: <a href="https://github.com/thecodest-co/microservices-in-symfony/blob/main/app1/config/packages/messenger.yaml" rel="noopener dofollow" target="_blank">thecodest-co/microservices-in-symfony/blob/main/app1/config/packages/messenger.yaml</a></p>
<p>Symfony Messenger is used for synchronous and asynchronous communication in Symfony applications. It supports a variety of <strong>transports</strong>, or sources of truth of the transport layer. In our example, we use the AMQP extension that supports the RabbitMQ event queue system.</p>
<p>The above configuration defines a new transport named <code>external_messages</code>, which references the <code>MESSENGER_TRANSPORT_DSN</code> environment variable and defines direct listening on the <code>messages</code> channel in Message Bus. At this point, also edit the <code>app1/.env</code> file and add the appropriate transport address.</p>
<div class="nuxt-content-highlight"><pre class="line-numbers language-text"><code>(...)
MESSENGER_TRANSPORT_DSN=amqp://user:password@rabbitmq:5672/%2f/messages
(...)
</code></pre></div>
<p>After preparing the application framework and configuring the libraries, it is time to implement the business logic. We know that our application must respond to the assignment of a job to a worker. We also know that assigning a job in the <code>app2</code> system changes the status of the job. So let's create a model that mimics the status change and save it in the <code>app1/Message/StatusUpdate.php</code> path:</p>
<p><img alt="image" src="https://user-images.githubusercontent.com/1628839/174621467-08418929-2b37-4398-a5bb-6cbbdf4493cb.png" loading="lazy"></p>
<div class="nuxt-content-highlight"><pre class="line-numbers language-php"><code><span class="token php language-php"><span class="token delimiter important">&lt;?php</span>
<span class="token keyword">declare</span><span class="token punctuation">(</span>strict_types<span class="token operator">=</span><span class="token number">1</span><span class="token punctuation">)</span><span class="token punctuation">;</span>
<span class="token keyword">namespace</span> <span class="token package">App<span class="token punctuation">\</span>Message</span><span class="token punctuation">;</span>

<span class="token keyword">class</span> <span class="token class-name-definition class-name">StatusUpdate</span>
<span class="token punctuation">{</span>
    <span class="token keyword">public</span> <span class="token keyword">function</span> <span class="token function-definition function">__construct</span><span class="token punctuation">(</span><span class="token keyword">protected</span> <span class="token keyword type-declaration">string</span> <span class="token variable">$status</span><span class="token punctuation">)</span><span class="token punctuation">{</span><span class="token punctuation">}</span>

    <span class="token keyword">public</span> <span class="token keyword">function</span> <span class="token function-definition function">getStatus</span><span class="token punctuation">(</span><span class="token punctuation">)</span><span class="token punctuation">:</span> <span class="token keyword return-type">string</span>
    <span class="token punctuation">{</span>
        <span class="token keyword">return</span> <span class="token this">$this</span><span class="token operator">-&gt;</span><span class="token property">status</span><span class="token punctuation">;</span>
    <span class="token punctuation">}</span>
<span class="token punctuation">}</span>
</span></code></pre></div>
<p>Source code available directly: <a href="https://github.com/thecodest-co/microservices-in-symfony/blob/main/app1/src/Message/StatusUpdate.php" rel="noopener dofollow" target="_blank">/thecodest-co/microservices-in-symfony/blob/main/app1/src/Message/StatusUpdate.php</a></p>
<p>We still need a class that will implement the business logic when our microservice receives the above event from the queue. So let's create a <a href="https://symfony.com/doc/current/messenger/handler_results.html" rel="noopener dofollow" target="_blank">Message Handler</a> in the <code>app1/Handler/StatusUpdateHandler.php</code> path:</p>
<p><img alt="image" src="https://user-images.githubusercontent.com/1628839/174621830-9e495a4d-f13e-4565-8485-bfcd50ec8b4a.png" loading="lazy"></p>
<div class="nuxt-content-highlight"><pre class="line-numbers language-php"><code><span class="token php language-php"><span class="token delimiter important">&lt;?php</span>
<span class="token keyword">declare</span><span class="token punctuation">(</span>strict_types<span class="token operator">=</span><span class="token number">1</span><span class="token punctuation">)</span><span class="token punctuation">;</span>
<span class="token keyword">namespace</span> <span class="token package">App<span class="token punctuation">\</span>Handler</span><span class="token punctuation">;</span>

<span class="token keyword">use</span> <span class="token package">App<span class="token punctuation">\</span>Message<span class="token punctuation">\</span>StatusUpdate</span><span class="token punctuation">;</span>
<span class="token keyword">use</span> <span class="token package">Psr<span class="token punctuation">\</span>Log<span class="token punctuation">\</span>LoggerInterface</span><span class="token punctuation">;</span>
<span class="token keyword">use</span> <span class="token package">Symfony<span class="token punctuation">\</span>Component<span class="token punctuation">\</span>Messenger<span class="token punctuation">\</span>Attribute<span class="token punctuation">\</span>AsMessageHandler</span><span class="token punctuation">;</span>

<span class="token attribute"><span class="token delimiter punctuation">#[</span><span class="token attribute-content"><span class="token attribute-class-name class-name">AsMessageHandler</span></span><span class="token delimiter punctuation">]</span></span>
<span class="token keyword">class</span> <span class="token class-name-definition class-name">StatusUpdateHandler</span>
<span class="token punctuation">{</span>
    <span class="token keyword">public</span> <span class="token keyword">function</span> <span class="token function-definition function">__construct</span><span class="token punctuation">(</span>
        <span class="token keyword">protected</span> <span class="token class-name type-declaration">LoggerInterface</span> <span class="token variable">$logger</span><span class="token punctuation">,</span>
    <span class="token punctuation">)</span> <span class="token punctuation">{</span><span class="token punctuation">}</span>

    <span class="token keyword">public</span> <span class="token keyword">function</span> <span class="token function-definition function">__invoke</span><span class="token punctuation">(</span><span class="token class-name type-declaration">StatusUpdate</span> <span class="token variable">$statusUpdate</span><span class="token punctuation">)</span><span class="token punctuation">:</span> <span class="token keyword return-type">void</span>
    <span class="token punctuation">{</span>
        <span class="token variable">$statusDescription</span> <span class="token operator">=</span> <span class="token variable">$statusUpdate</span><span class="token operator">-&gt;</span><span class="token function">getStatus</span><span class="token punctuation">(</span><span class="token punctuation">)</span><span class="token punctuation">;</span>

        <span class="token this">$this</span><span class="token operator">-&gt;</span><span class="token property">logger</span><span class="token operator">-&gt;</span><span class="token function">warning</span><span class="token punctuation">(</span><span class="token string single-quoted-string">'APP1: {STATUS_UPDATE} - '</span><span class="token operator">.</span><span class="token variable">$statusDescription</span><span class="token punctuation">)</span><span class="token punctuation">;</span>
        
        <span class="token comment">// the rest of business logic, i.e. sending email to user</span>
        <span class="token comment">// $this-&gt;emailService-&gt;email()</span>
    <span class="token punctuation">}</span>
<span class="token punctuation">}</span>
</span></code></pre></div>
<p>Source code available directly: <a href="https://github.com/thecodest-co/microservices-in-symfony/blob/main/app1/src/Handler/StatusUpdateHandler.php" rel="noopener dofollow" target="_blank">/thecodest-co/microservices-in-symfony/blob/main/app1/src/Handler/StatusUpdateHandler.php</a></p>
<p><strong>PHP</strong> attributes make things much easier and mean that in this particular case we don't have to worry about autowiring or service declaration. Our microservice for handling domain events is ready, it's time to get down to the second application.</p>
<h2 id="second-symfony-microservice"><a href="#second-symfony-microservice" aria-hidden="true" tabindex="-1"><span class="icon icon-link"></span></a>Second Symfony microservice</h2>
<p>We will take a look at the <code>app2</code> directory and the second <strong>Symfony application</strong>. Our idea is to send a message to the queue when a worker is assigned a task in the system. So let's do a quick configuration of AMQP and get our second microservice to start publishing <code>StatusUpdate</code> events to the Message Bus.</p>
<p>Installing the libraries is exactly the same as for the first application.</p>
<div class="nuxt-content-highlight"><pre class="line-numbers language-shell"><code><span class="token builtin class-name">cd</span> <span class="token punctuation">..</span>
<span class="token builtin class-name">cd</span> app2/
symfony <span class="token function">composer</span> req amqp ampq-messenger monolog
</code></pre></div>
<p>Let's make sure that the <code>app2/.env</code> file contains a valid DSN entry for RabbitMQ:</p>
<div class="nuxt-content-highlight"><pre class="line-numbers language-text"><code>(...)
MESSENGER_TRANSPORT_DSN=amqp://user:password@rabbitmq:5672/%2f/messages
(...)
</code></pre></div>
<p>All that remains is to configure Symfony Messenger in the <code>app2/config/packages/messenger.yaml</code> file:</p>
<div class="nuxt-content-highlight"><pre class="line-numbers language-yaml"><code><span class="token key atrule">framework</span><span class="token punctuation">:</span>
    <span class="token key atrule">messenger</span><span class="token punctuation">:</span>
        <span class="token comment"># Uncomment this (and the failed transport below) to send failed messages to this transport for later handling.</span>
        <span class="token comment"># failure_transport: failed</span>

        <span class="token key atrule">transports</span><span class="token punctuation">:</span>
            <span class="token comment"># https://symfony.com/doc/current/messenger.html#transport-configuration</span>
            <span class="token key atrule">async</span><span class="token punctuation">:</span>
                <span class="token key atrule">dsn</span><span class="token punctuation">:</span> <span class="token string">'%env(MESSENGER_TRANSPORT_DSN)%'</span>

        <span class="token key atrule">routing</span><span class="token punctuation">:</span>
            <span class="token comment"># Route your messages to the transports</span>
            <span class="token key atrule">'App\Message\StatusUpdate'</span><span class="token punctuation">:</span> async
</code></pre></div>
<p>Source code available directly: <a href="https://github.com/thecodest-co/microservices-in-symfony/blob/main/app2/config/packages/messenger.yaml" rel="noopener dofollow" target="_blank">thecodest-co/microservices-in-symfony/blob/main/app2/config/packages/messenger.yaml</a></p>
<p>As you can see, this time the transport definition points directly to <code>async</code> and defines routing in the form of sending our <code>StatusUpdate</code> message to the configured DSN. This is the only area of configuration, all that is left is to create the logic and implementation layer of the AMQP queue. For this we will create the twin <code>StatusUpdateHandler</code> and <code>StatusUpdate</code> classes in <code>app2</code>.</p>
<p><img alt="image" src="https://user-images.githubusercontent.com/1628839/174622496-80d71c52-1f33-47bf-82d3-bac4d83525dc.png" loading="lazy"></p>
<div class="nuxt-content-highlight"><pre class="line-numbers language-php"><code><span class="token php language-php"><span class="token delimiter important">&lt;?php</span>
<span class="token keyword">declare</span><span class="token punctuation">(</span>strict_types<span class="token operator">=</span><span class="token number">1</span><span class="token punctuation">)</span><span class="token punctuation">;</span>

<span class="token keyword">namespace</span> <span class="token package">App<span class="token punctuation">\</span>Handler</span><span class="token punctuation">;</span>

<span class="token keyword">use</span> <span class="token package">App<span class="token punctuation">\</span>Message<span class="token punctuation">\</span>StatusUpdate</span><span class="token punctuation">;</span>
<span class="token keyword">use</span> <span class="token package">Psr<span class="token punctuation">\</span>Log<span class="token punctuation">\</span>LoggerInterface</span><span class="token punctuation">;</span>
<span class="token keyword">use</span> <span class="token package">Symfony<span class="token punctuation">\</span>Component<span class="token punctuation">\</span>Messenger<span class="token punctuation">\</span>Attribute<span class="token punctuation">\</span>AsMessageHandler</span><span class="token punctuation">;</span>

<span class="token attribute"><span class="token delimiter punctuation">#[</span><span class="token attribute-content"><span class="token attribute-class-name class-name">AsMessageHandler</span></span><span class="token delimiter punctuation">]</span></span>
<span class="token keyword">class</span> <span class="token class-name-definition class-name">StatusUpdateHandler</span>
<span class="token punctuation">{</span>
    <span class="token keyword">public</span> <span class="token keyword">function</span> <span class="token function-definition function">__construct</span><span class="token punctuation">(</span>
        <span class="token keyword">private</span> readonly <span class="token class-name type-declaration">LoggerInterface</span> <span class="token variable">$logger</span><span class="token punctuation">,</span>
    <span class="token punctuation">)</span> <span class="token punctuation">{</span><span class="token punctuation">}</span>

    <span class="token keyword">public</span> <span class="token keyword">function</span> <span class="token function-definition function">__invoke</span><span class="token punctuation">(</span><span class="token class-name type-declaration">StatusUpdate</span> <span class="token variable">$statusUpdate</span><span class="token punctuation">)</span><span class="token punctuation">:</span> <span class="token keyword return-type">void</span>
    <span class="token punctuation">{</span>
        <span class="token variable">$statusDescription</span> <span class="token operator">=</span> <span class="token variable">$statusUpdate</span><span class="token operator">-&gt;</span><span class="token function">getStatus</span><span class="token punctuation">(</span><span class="token punctuation">)</span><span class="token punctuation">;</span>

        <span class="token this">$this</span><span class="token operator">-&gt;</span><span class="token property">logger</span><span class="token operator">-&gt;</span><span class="token function">warning</span><span class="token punctuation">(</span><span class="token string single-quoted-string">'APP2: {STATUS_UPDATE} - '</span><span class="token operator">.</span><span class="token variable">$statusDescription</span><span class="token punctuation">)</span><span class="token punctuation">;</span>
        
        <span class="token comment">## business logic, i.e. sending internal notification or queueing some other systems</span>
    <span class="token punctuation">}</span>
<span class="token punctuation">}</span>
</span></code></pre></div>
<p>Source code available directly: <a href="https://github.com/thecodest-co/microservices-in-symfony/blob/main/app2/src/Handler/StatusUpdateHandler.php" rel="noopener dofollow" target="_blank">/thecodest-co/microservices-in-symfony/blob/main/app2/src/Handler/StatusUpdateHandler.php</a></p>
<p><img alt="image" src="https://user-images.githubusercontent.com/1628839/174621467-08418929-2b37-4398-a5bb-6cbbdf4493cb.png" loading="lazy"></p>
<div class="nuxt-content-highlight"><pre class="line-numbers language-php"><code><span class="token php language-php"><span class="token delimiter important">&lt;?php</span>
<span class="token keyword">declare</span><span class="token punctuation">(</span>strict_types<span class="token operator">=</span><span class="token number">1</span><span class="token punctuation">)</span><span class="token punctuation">;</span>

<span class="token keyword">namespace</span> <span class="token package">App<span class="token punctuation">\</span>Message</span><span class="token punctuation">;</span>

<span class="token keyword">class</span> <span class="token class-name-definition class-name">StatusUpdate</span>
<span class="token punctuation">{</span>
    <span class="token keyword">public</span> <span class="token keyword">function</span> <span class="token function-definition function">__construct</span><span class="token punctuation">(</span><span class="token keyword">protected</span> <span class="token keyword type-declaration">string</span> <span class="token variable">$status</span><span class="token punctuation">)</span><span class="token punctuation">{</span><span class="token punctuation">}</span>

    <span class="token keyword">public</span> <span class="token keyword">function</span> <span class="token function-definition function">getStatus</span><span class="token punctuation">(</span><span class="token punctuation">)</span><span class="token punctuation">:</span> <span class="token keyword return-type">string</span>
    <span class="token punctuation">{</span>
        <span class="token keyword">return</span> <span class="token this">$this</span><span class="token operator">-&gt;</span><span class="token property">status</span><span class="token punctuation">;</span>
    <span class="token punctuation">}</span>
<span class="token punctuation">}</span>
</span></code></pre></div>
<p>Source code available directly: <a href="https://github.com/thecodest-co/microservices-in-symfony/blob/main/app2/src/Message/StatusUpdate.php" rel="noopener dofollow" target="_blank">/thecodest-co/microservices-in-symfony/blob/main/app2/src/Message/StatusUpdate.php</a></p>
<p>Finally, all that has to be done is to create a way to send a message to the Message Bus. We will create a simple <a href="https://symfony.com/doc/current/console.html" rel="noopener dofollow" target="_blank">Symfony Command</a> for this:</p>
<p><img alt="image" src="https://user-images.githubusercontent.com/1628839/174623304-2fd696df-28b7-4946-ad2c-671bb8d589f3.png" loading="lazy"></p>
<div class="nuxt-content-highlight"><pre class="line-numbers language-php"><code><span class="token php language-php"><span class="token delimiter important">&lt;?php</span>
<span class="token keyword">declare</span><span class="token punctuation">(</span>strict_types<span class="token operator">=</span><span class="token number">1</span><span class="token punctuation">)</span><span class="token punctuation">;</span>

<span class="token keyword">namespace</span> <span class="token package">App<span class="token punctuation">\</span>Command</span><span class="token punctuation">;</span>

<span class="token keyword">use</span> <span class="token package">App<span class="token punctuation">\</span>Message<span class="token punctuation">\</span>StatusUpdate</span><span class="token punctuation">;</span>
<span class="token keyword">use</span> <span class="token package">Symfony<span class="token punctuation">\</span>Component<span class="token punctuation">\</span>Console<span class="token punctuation">\</span>Attribute<span class="token punctuation">\</span>AsCommand</span><span class="token punctuation">;</span>
<span class="token keyword">use</span> <span class="token package">Symfony<span class="token punctuation">\</span>Component<span class="token punctuation">\</span>Console<span class="token punctuation">\</span>Command<span class="token punctuation">\</span>Command</span><span class="token punctuation">;</span>
<span class="token keyword">use</span> <span class="token package">Symfony<span class="token punctuation">\</span>Component<span class="token punctuation">\</span>Console<span class="token punctuation">\</span>Input<span class="token punctuation">\</span>InputInterface</span><span class="token punctuation">;</span>
<span class="token keyword">use</span> <span class="token package">Symfony<span class="token punctuation">\</span>Component<span class="token punctuation">\</span>Console<span class="token punctuation">\</span>Output<span class="token punctuation">\</span>OutputInterface</span><span class="token punctuation">;</span>
<span class="token keyword">use</span> <span class="token package">Symfony<span class="token punctuation">\</span>Component<span class="token punctuation">\</span>Messenger<span class="token punctuation">\</span>MessageBusInterface</span><span class="token punctuation">;</span>

<span class="token attribute"><span class="token delimiter punctuation">#[</span><span class="token attribute-content"><span class="token attribute-class-name class-name">AsCommand</span><span class="token punctuation">(</span>
    <span class="token attribute-class-name class-name">name</span><span class="token punctuation">:</span> <span class="token string double-quoted-string">"app:send"</span>
<span class="token punctuation">)</span></span><span class="token delimiter punctuation">]</span></span>
<span class="token keyword">class</span> <span class="token class-name-definition class-name">SendStatusCommand</span> <span class="token keyword">extends</span> <span class="token class-name">Command</span>
<span class="token punctuation">{</span>
    <span class="token keyword">public</span> <span class="token keyword">function</span> <span class="token function-definition function">__construct</span><span class="token punctuation">(</span><span class="token keyword">private</span> readonly <span class="token class-name type-declaration">MessageBusInterface</span> <span class="token variable">$messageBus</span><span class="token punctuation">,</span> <span class="token keyword type-hint">string</span> <span class="token variable">$name</span> <span class="token operator">=</span> <span class="token constant">null</span><span class="token punctuation">)</span>
    <span class="token punctuation">{</span>
        <span class="token scope"><span class="token keyword">parent</span><span class="token punctuation">::</span></span><span class="token function">__construct</span><span class="token punctuation">(</span><span class="token variable">$name</span><span class="token punctuation">)</span><span class="token punctuation">;</span>
    <span class="token punctuation">}</span>

    <span class="token keyword">protected</span> <span class="token keyword">function</span> <span class="token function-definition function">execute</span><span class="token punctuation">(</span><span class="token class-name type-declaration">InputInterface</span> <span class="token variable">$input</span><span class="token punctuation">,</span> <span class="token class-name type-declaration">OutputInterface</span> <span class="token variable">$output</span><span class="token punctuation">)</span><span class="token punctuation">:</span> <span class="token keyword return-type">int</span>
    <span class="token punctuation">{</span>
        <span class="token variable">$status</span> <span class="token operator">=</span> <span class="token string double-quoted-string">"Worker X assigned to Y"</span><span class="token punctuation">;</span>

        <span class="token this">$this</span><span class="token operator">-&gt;</span><span class="token property">messageBus</span><span class="token operator">-&gt;</span><span class="token function">dispatch</span><span class="token punctuation">(</span>
            <span class="token argument-name">message</span><span class="token punctuation">:</span> <span class="token keyword">new</span> <span class="token class-name">StatusUpdate</span><span class="token punctuation">(</span><span class="token variable">$status</span><span class="token punctuation">)</span>
        <span class="token punctuation">)</span><span class="token punctuation">;</span>

        <span class="token keyword">return</span> <span class="token scope">Command<span class="token punctuation">::</span></span><span class="token constant">SUCCESS</span><span class="token punctuation">;</span>
    <span class="token punctuation">}</span>
<span class="token punctuation">}</span>
</span></code></pre></div>
<p>Source code available directly: <a href="https://github.com/thecodest-co/microservices-in-symfony/blob/main/app2/src/Command/SendStatusCommand.php" rel="noopener dofollow" target="_blank">/thecodest-co/microservices-in-symfony/blob/main/app2/src/Command/SendStatusCommand.php</a></p>
<p>Thanks to <a href="https://symfony.com/doc/current/components/dependency_injection.html" rel="noopener dofollow" target="_blank">Dependency Injection</a> we can use an instance of <code>MessageBusInterface</code> in our Command and send a <code>StatusUpdate</code> message via the <code>dispatch()</code> method to our queue. Additionally, we also use PHP Attributes here.</p>
<p>That's it - all that's left is to run our Docker Compose environment and see how our applications behave.</p>
<h2 id="running-the-environment-and-testing"><a href="#running-the-environment-and-testing" aria-hidden="true" tabindex="-1"><span class="icon icon-link"></span></a>Running the environment and testing</h2>
<p>With Docker Compose the containers with our two applications will be built and run as separate instances, the only middleware layer will be the <code>rabbitmq</code> container and our Message Bus implementation.</p>
<p>From the root directory of the project, let's run the following commands:</p>
<div class="nuxt-content-highlight"><pre class="line-numbers language-shell"><code><span class="token builtin class-name">cd</span> <span class="token punctuation">..</span>/ <span class="token comment"># make sure you're in main directory</span>
docker-compose up --build -d
</code></pre></div>
<p>This command can take some time, as it builts two separate containers with PHP 8.1 + AMQP and pulls RabbitMQ image. Be patient. After images are built you can fire our Command from <code>app2</code> and send some messages on a queue.</p>
<div class="nuxt-content-highlight"><pre class="line-numbers language-shell"><code>docker <span class="token builtin class-name">exec</span> -it app2 php bin/console app:send
</code></pre></div>
<p>You can do it as many times as you can. As long as there's no <em><strong>consumer</strong></em> your messages will not be processed. As soon as you fire up the <code>app1</code> and consume all the messages they'll show on your screen.</p>
<div class="nuxt-content-highlight"><pre class="line-numbers language-shell"><code>docker <span class="token builtin class-name">exec</span> -it app1 php bin/console messenger:consume -vv external_messages
</code></pre></div>
<p><img alt="image" src="https://user-images.githubusercontent.com/1628839/174612800-37393c80-bc4a-47f8-9448-2c64173ebddb.png" loading="lazy"></p>
<p>The complete <a href="https://github.com/thecodest-co/microservices-in-symfony" rel="noopener dofollow" target="_blank">source code</a> along with the README can be found in our public repository <a href="https://github.com/thecodest-co/" rel="noopener dofollow" target="_blank">The Codest Github</a></p>
<h2>Summary</h2>
<p>Symfony with its libraries and tools allows for a fast and efficient approach to developing modern <strong>web applications</strong>. With a few commands and a few lines of code we are able to create a modern communication system between applications. Symfony, like <strong>PHP</strong>, is ideal for <strong>developing web applications</strong> and thanks to its ecosystem and ease of implementation this ecosystem achieves some of the best time-to-market indicators.</p>
<p>However, fast does not always mean good - in the example above we presented the simplest and fastest way of communication. What the more inquisitive will certainly notice that there is a lack of disconnection of domain events outside the application layer - in the current version they are duplicated, and there is no full support for <code>Envelope</code>, among others there is no <code>Stamps</code>. For those and others, I invite you to read Part II, where we'll cover the topic of unifying the domain structure of Symfony applications in a microservices environment, and discuss the second popular microservices communication method - this time synchronous, based on the REST API.</p>
<p><a href="https://calendly.com/the-codest-php/thecodest-php-tech-consultation" rel="noopener dofollow" target="_blank"><img alt="PHP development free consulting" src="/images/uploaded/php_development.png" loading="lazy" width="1283" height="460"></a></p>
<p><strong>Read more:</strong></p>
<p><a href="https://thecodest.co/blog/5-mistakes-you-should-avoid-while-maintaining-a-project-in-php" rel="noopener dofollow" target="_blank">5 Mistakes You Should Avoid While Maintaining a Project in PHP</a></p>
<p><a href="https://thecodest.co/blog/php-development-symfony-console-component-tips-tricks" rel="noopener dofollow" target="_blank">PHP Development. Symfony Console Component - Tips &amp; Tricks</a></p>
<p><a href="https://thecodest.co/blog/why-do-we-need-symfony-polyfill-and-why-we-shouldnt" rel="noopener dofollow" target="_blank">Why do we need Symfony Polyfill (... and why we shouldn't)</a></p></div>
