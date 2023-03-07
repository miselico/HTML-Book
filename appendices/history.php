<!--	<section id="app">-->
	<section id="chap-defs" class="appendix">
		<h2>Background</h2>
		<p>We now discuss the broader historical context that has paved the way for the modern advent of knowledge graphs, and the definitions of the notion of “knowledge graph” that have been proposed both before and after the announcement of the Google Knowledge Graph&nbsp;<?php echo $references->cite("GoogleKG"); ?>. We remark that the discussion presented here builds upon (but does not subsume) previous discussion by <?php echo $references->citet("EhrlingerW16"); ?> and <?php echo $references->citet("Bergman19"); ?>, which we refer to for further details. Though our goal is to be comprehensive, the list of historical references should not be considered exhaustive.</p>

		<section id="app-historical" class="sectionapp">
		<h3>Historical Perspective</h3>
		<p>The lineage of knowledge graphs can be traced back to the origins of diagrammatic forms of knowledge representation: a tradition going back at least as far as Aristotle (\(\sim\)350&nbsp;BC), followed by notions such as Euler circles and Venn diagrams that helped humans to reason through visual insights. Centuries later, a variety of researchers – particularly <?php echo $references->citeH("sylvester"); ?>, <?php echo $references->citeH("peirce"); ?> and <?php echo $references->citeH("frege"); ?> – independently devised formal diagrammatic systems that not only facilitate reasoning, but also codify reasoning; in other words, their goal was to use diagrams as formal systems.</p>
		<p>With the advent of digital computers, programs began to be used to perform formal reasoning and to code representations of knowledge. These developments can be traced back to works such as those of <?php echo $references->citeH("richens58"); ?>, <?php echo $references->citeH("quillian"); ?>, and <?php echo $references->citeH("milgram"); ?>, which focused on formal representations for natural language, information, and knowledge. These early works were limited (at least by modern standards) by the poor computational resources available. From the formal (logical) point of view, a number of influential developments took place in the 70’s, including the introduction of <em>frames</em> by <?php echo $references->citeH("minsky"); ?>, the formalisation of <em>semantic networks</em> by <?php echo $references->citeH("Brachman"); ?> and <?php echo $references->citeH("woods"); ?>, and the proposal of <em>conceptual graphs</em> by <?php echo $references->citeH("sowa"); ?>. These works tried to integrate formal logic with diagrammatic representations of knowledge by giving a (more-or-less) formal semantics to graph representations. But as <?php echo $references->citeH("sowa"); ?> later wrote in the entry “<em>Semantic networks</em>” of the Encyclopedia of Cognitive Science: “<em>Woods (1975) and McDermott (1976) observed, the semantic networks themselves have no well-defined semantics. Standard predicate calculus does have a precisely defined, model theoretic semantics; it is adequate for describing mathematical theories with a closed set of axioms. But the real world is messy, incompletely explored, and full of unexpected surprises.</em>”</p>
		<p>From this era of exploration and attempts to define programs to simulate the visual and formal reasoning of humans, the following key notions were established that are still of relevance today:</p>
		<ul>
			<li>knowledge representation using diagrams (often graphs) and visual means;</li>
			<li>computational procedures and algorithms to perform formal reasoning;</li>
			<li>combinations of formal (logical) and statistical forms of reasoning;</li>
			<li>relevance of diverse types of data (e.g., images, audio) as knowledge sources.</li>
		</ul>
		<p>These works on conceptual graphs, semantic networks, and frames were direct predecessors of Description Logics, which aimed to give a well-defined semantics to these earlier notions towards building practical reasoning systems for decidable logics. Description Logics stem from the KL-ONE system proposed by <?php echo $references->citeH("BrachmanS85"); ?>, and the “<em>attributive concept descriptions with complements</em>” language (aka \(\mathcal{ALC}\)) proposed by <?php echo $references->citeH("Schmidt-SchaussS91"); ?>. Description Logics would be further explored in later years (see Section&nbsp;<?php echo ref("sssec:dls"); ?>) and formed the underpinnings of the Web Ontology Language (OWL) standard&nbsp;<?php echo $references->cite("OWL2"); ?>. Together with the Resource Description Framework (RDF)&nbsp;<?php echo $references->cite("rdf11"); ?>, OWL would become one of the main building blocks of the Semantic Web&nbsp;<?php echo $references->cite("berners-lee01"); ?>, within which many of the formative ideas and standards underlying knowledge graphs would later be developed, including not only RDF and OWL, but also RDFS&nbsp;<?php echo $references->cite("RDFS"); ?>, SPARQL&nbsp;<?php echo $references->cite("sparql11"); ?>, Linked Data principles&nbsp;<?php echo $references->cite("ldprinciples"); ?>, Shape Expressions&nbsp;<?php echo $references->cite("Labra2017"); ?>, and indeed, many of the other concepts, standards and techniques discussed in this book. Most of the open knowledge graphs discussed in Section&nbsp;<?php echo ref("sec:openkgs"); ?> – including BabelNet&nbsp;<?php echo $references->cite("NavigliPonzetto:12"); ?>, DBpedia&nbsp;<?php echo $references->cite("LehmannIJJKMHMK15"); ?>, Freebase&nbsp;<?php echo $references->cite("bollacker2007platform"); ?>, Wikidata&nbsp;<?php echo $references->cite("VrandecicK14"); ?>, YAGO&nbsp;<?php echo $references->cite("suchanek2007yago"); ?>, etc. – have either emerged from the Semantic Web community, or would later adopt the standards it proposes.</p>
		</section>

		<section id="app-pre2012" class="sectionapp">
		<h3>“Knowledge Graphs”: Pre-2012</h3>
		<p>Long before the 2012 announcement of the Google Knowledge Graph, various authors had used the phrase “knowledge graph” in publications stretching back to the 40’s, but with unrelated meaning. To the best of our knowledge, the first reference to a “knowledge graph” of relevance to the modern meaning was in a paper by <?php echo $references->citeH("Schneider72"); ?> in the area of computerised instructional systems for education, where a knowledge graph – in his case a directed graph whose nodes are units of knowledge (concepts) that a student should acquire, and whose edges denote dependencies between such units of knowledge – is used to represent and store an instructional course on a computer. An analogous notion of a “knowledge graph” was used by <?php echo $references->citeH("MarchiM74"); ?> to study paths through the knowledge units of an instructional course that yield the highest payoffs for teachers and students in a game-theoretic sense. Around the same time, in a paper on linguistics, <?php echo $references->citeH("Kummel73"); ?> describes a numerical representation of knowledge, with “radicals” – referring to some symbol with meaning – forming the nodes of a knowledge graph.</p>
		<p>Further authors were to define instantiations of knowledge graphs in the 80’s. <?php echo $references->citeH("rada1986gradualness"); ?> defines a knowledge graph in the context of medical expert systems, where domain knowledge is defined as a weighted graph, over which a “gradual” learning process is applied to refine knowledge by making small change to weights. <?php echo $references->citeH("Bakker"); ?> defines a knowledge graph with the purpose of cumulatively representing content gleaned from medical and sociological texts, with a focus on causal relationships. Work on knowledge graphs from the same group would continue over the years, with contributions by <?php echo $references->citeH("stokman1988structuring"); ?> further introducing mereological (<em>part of</em>) and instantiation (<em>is a</em>) relations to the knowledge graph, and thereafter by <?php echo $references->citet("james"); ?>, <?php echo $references->citet("Hoede95"); ?>, <?php echo $references->citet("zhang"); ?>, <?php echo $references->citet("Popping03"); ?>, amongst others, in the decades that followed&nbsp;<?php echo $references->cite("NurdiatiH08"); ?>. The notion of knowledge graph used in such works considered a fixed number of relations. Other authors pursued their own parallel notions of knowledge graphs towards the end of the 80’s. <?php echo $references->citeH("rappaport1988dynamic"); ?> describe a user interface for visualising a knowledge-base – composed of facts and rules – using a knowledge graph that connects related elements of the knowledge-base. <?php echo $references->citeH("SrikanthJ89"); ?> use the notion of a knowledge graph to represent the entities and relations involved in projects, particularly software projects, where partitioning techniques are applied to the knowledge graph to modularise the knowledge required in the project.</p>
		<p>Continuing to the 90’s, the notion of a “knowledge graph” would again arise in different, seemingly independent settings. <?php echo $references->citeH("de1990hybrid"); ?> propose a knowledge graph as a directed graph composed of a taxonomy of instances being related with weighted edges to a taxonomy of classes; they use symbolic learning to extract such knowledge graphs from examples. <?php echo $references->citeH("MachadoR90"); ?> define a knowledge graph as an acyclic, weighted <em>and</em>–<em>or</em> graph,<?php echo footnote("An <em>and</em>–<em>or</em> graph denotes dependency relations, where <em>and</em> denotes a conjunction of sub-goals on which a goal depends, while <em>or</em> denotes a disjunction of sub-goals."); ?> defining fuzzy dependencies that connect observations to hypotheses through intermediary nodes. These knowledge graphs are elicited from domain experts and can be used to generate neural networks for selecting hypotheses from input observations. Knowledge graphs were again later used by <?php echo $references->citeH("DiengGTC92"); ?> to represent the results of knowledge acquisition from experts. <?php echo $references->citeH("ShimonyDS97"); ?> rather define a knowledge graph based on a <em>Bayesian knowledge base</em> – i.e., a Bayesian network that permits directed cycles – over which Bayesian inference can be applied. This definition was further built upon in a later work by <?php echo $references->citeH("JrS99"); ?>.</p>
		<p>Moving to the 00’s, <?php echo $references->citeH("Jiang02"); ?> introduce the notion of “plan knowledge graphs” where nodes represent goals and edges dependencies between goals, further encoding supporting degrees that can change upon further evidence. Search algorithms are then defined on the graph to determine a plan for a particular goal. <?php echo $references->citeH("HelmsB05"); ?> propose a knowledge graph to represent the flow of knowledge in an organisation, with nodes representing knowledge actors (creators, sharers, users), edges representing knowledge flow from one actor to another, and edge weights indicating the “velocity” (delay of flow) and “viscosity” (the depth of knowledge transferred). Graph algorithms are then proposed to find bottlenecks in knowledge flow. <?php echo $references->citeH("KasneciSIRW08"); ?> propose a search engine for knowledge graphs, defined to be weighted directed edge-labelled graphs, where weights denote confidence scores based on the centrality of source documents from which the edge/relation was extracted. From the same group, <?php echo $references->citeH("ElbassuoniRSSW09"); ?> adopt a similar notion of a knowledge graph, adding edge attributes to include keywords from the source, a count of supporting sources, etc., showing how the graph can be queried. <?php echo $references->citeH("CourseyM09"); ?> construct a knowledge graph from Wikipedia, where nodes represent Wikipedia articles and categories, while edges represent the proximity of nodes. Given an input text, entity linking and centrality measures are applied over the knowledge graph to determine relevant Wikipedia categories for the text.</p>
		<p>Concluding with the 10’s (prior to 2012), <?php echo $references->citeH("PechsiriP10"); ?> use knowledge graphs to capture “explanation knowledge” – the knowledge of why something is the way it is – by representing events as nodes and causal relationships as edges, claiming that this graphical notation offers more intuitive explanations to users; their work focuses on extracting such graphs from text. <?php echo $references->citeH("CorbyF10"); ?> use the phrase “knowledge graph” in a general way to denote any graph encoding knowledge, proposing an abstract machine for querying such graphs.</p>
		<p>Other phrases were used to represent similar notions by other authors, including “information graphs”&nbsp;<?php echo $references->cite("Kummel73"); ?>, “information networks”&nbsp;<?php echo $references->cite("sun2011pathsim"); ?>, “knowledge networks”&nbsp;<?php echo $references->cite("ciampaglia2015computational"); ?>, as well as “semantic networks”&nbsp;<?php echo $references->cite("Brachman,woods,NavigliPonzetto:12"); ?> and “conceptual graphs”&nbsp;<?php echo $references->cite("sowa"); ?>, as mentioned previously. Here we exclusively considered works that (happen to) use the phrase “knowledge graph” prior to Google’s announcement of their knowledge graph in 2012, where we see that many works had independently coined this phrase for different purposes. Similar to the current practice, all of the works of this period consider a knowledge graph to be formed of a set of nodes denoting entities of interest and a set of edges denoting relations between those entities, with different entities and relations being considered in different works. Some works add extra elements to these knowledge graphs, such as edge weights, edge labels, or other metadata&nbsp;<?php echo $references->cite("ElbassuoniRSSW09"); ?>. Other trends include knowledge acquisition from experts&nbsp;<?php echo $references->cite("rada1986gradualness,MachadoR90,DiengGTC92"); ?> and knowledge extraction from text&nbsp;<?php echo $references->cite("Bakker,stokman1988structuring,james,Hoede95"); ?>, combinations of symbolic and inductive methods&nbsp;<?php echo $references->cite("MachadoR90,de1990hybrid,ShimonyDS97,JrS99"); ?>, as well as the use of rules&nbsp;<?php echo $references->cite("rappaport1988dynamic"); ?>, ontologies&nbsp;<?php echo $references->cite("Hoede95"); ?>, graph analytics&nbsp;<?php echo $references->cite("SrikanthJ89,HelmsB05,KasneciSIRW08"); ?>, learning&nbsp;<?php echo $references->cite("rada1986gradualness,de1990hybrid,ShimonyDS97,JrS99"); ?>, amongst other techniques. Later papers (2008–2010) by <?php echo $references->citet("KasneciSIRW08"); ?>, <?php echo $references->citet("ElbassuoniRSSW09"); ?>, <?php echo $references->citet("CourseyM09"); ?> and <?php echo $references->citet("CorbyF10"); ?> introduce notions of “knowledge graph” that are more similar to the current practice.</p>
		<p>However, some trends are not reflected in current practice. Of note is that many of the knowledge graphs defined in this period consider edges as denoting a form of dependence or causality, where <span class="gnode">\(x\)</span><?php echo esource() . etipr(); ?><span class="gnode">\(y\)</span> may denote that \(x\) is a prerequisite for \(y\)&nbsp;<?php echo $references->cite("Schneider72,MarchiM74,Jiang02"); ?> or that \(x\) leads to \(y\)&nbsp;<?php echo $references->cite("rada1986gradualness,Bakker,rappaport1988dynamic,MachadoR90,ShimonyDS97,Jiang02"); ?>. In some cases <em>and</em>–<em>or</em> graphs are used to denote conjunctions or disjunctions of such relations&nbsp;<?php echo $references->cite("MachadoR90"); ?>, while in other cases edges are weighted to assign a belief to a relation&nbsp;<?php echo $references->cite("MachadoR90,Jiang02,rada1986gradualness"); ?>. Papers from 1970–2000 tend to have worked with small graphs, which contrasts with modern practice where knowledge graphs can reach scales of millions or billions of nodes&nbsp;<?php echo $references->cite("NoyGJNPT19"); ?>: during this period, computational resources were more limited&nbsp;<?php echo $references->cite("Schneider72"); ?>, and fewer sources of structured data were readily available, meaning that the knowledge graphs were often sourced solely from human experts&nbsp;<?php echo $references->cite("rada1986gradualness,MachadoR90,DiengGTC92"); ?> or from text&nbsp;<?php echo $references->cite("Bakker,stokman1988structuring,james,Hoede95"); ?>.</p>
		</section>	

		<section id="app-post2012" class="sectionapp">
		<h3>“Knowledge Graphs”: 2012 Onwards</h3>
		<p>Google Knowledge Graph was announced in 2012&nbsp;<?php echo $references->cite("GoogleKG"); ?>. This initial announcement was targeted at a broad audience, mainly motivating the knowledge graph and describing applications that it would enable, where the knowledge graph itself is described as “<em>[a graph] that understands real-world entities and their relationships to one another</em>”&nbsp;<?php echo $references->cite("GoogleKG"); ?>. Mentions of “knowledge graphs” gained momentum in the research literature from that point. As noted by <?php echo $references->citet("Bergman19"); ?>, this announcement by Google was a watershed moment for adopting the phrase “knowledge graph”. However, given the informal nature of the announcement, a technical definition was lacking&nbsp;<?php echo $references->cite("EhrlingerW16,BonattiDPP18"); ?>.</p>
		<p>Given that knowledge graphs were gaining more and more attention not only in practice, but also in the academic literature, formal definitions were becoming a necessity in order to precisely characterise what they were, how they were structured, how they could be used, etc., and more generally to facilitate their study in a precise manner. We can determine four general categories of definitions that have emerged.</p>
		<ul id="def-categories">
			<li>The first category simply defines the knowledge graph as a graph where nodes represent entities, and edges represent relationships between those entities. Often a directed edge-labelled graph is assumed (or analogously, a set of named binary relations, or a set of triples). This simple definition was popularised by seminal papers on knowledge graph embeddings&nbsp;<?php echo $references->cite("wang2014knowledge,lin2015learning"); ?>, being sufficient to represent the data model upon which these embeddings operate. As reflected in the later survey by <?php echo $references->citet("Wang2017KGEmbedding"); ?>, the multitude of works that would follow on knowledge graph embeddings have continued to use this definition. Though simple, the <em>Category I</em> definition raised some doubts: How is a knowledge graph different from a graph (database)? Where does knowledge come into play?</li>
			<li>A second common definition goes as follows: “<em>a knowledge graph is a graph-structured knowledge base</em>”. To the best of our knowledge, the earliest usages of this definition in the literature were by <?php echo $references->citet("nickel"); ?> and <?php echo $references->citet("SeufertEBKBW16"); ?> (interestingly in the formal notation of these initial papers, a knowledge graph is defined analogously to a directed edge-labelled graph). Such a definition raises the question: what, then, is a “knowledge base”? The phrase “knowledge base” was popularised in the 70’s (possibly earlier) in the context of rule-based expert systems&nbsp;<?php echo $references->cite("BuchananF78"); ?>, and later were used in the context of ontologies and other logical formalisms&nbsp;<?php echo $references->cite("BrachmanS85"); ?>. The follow-up question then is: can we have a knowledge base (graph-structured or not) without a logical formalism while staying true to the original definitions? Looking in further detail, similar ambiguities have also existed regarding the definition of a “knowledge base” (KB). Of note: <?php echo $references->citeH("BrachmanL85"); ?> – reporting after a workshop on this issue – state that “<em>if we ask what the KB tells us about the world, we are asking about its Knowledge Level</em>”.</li>
			<li>The third category of definitions outline more specific technical characteristics that a “knowledge graph” should comply with.<ul>
				<li>In an influential survey on knowledge graph refinement, <?php echo $references->citet("Paulheim17"); ?> lists four criteria that characterise the knowledge graphs considered for the paper. Specifically, he puts forward that a knowledge graph “<em>mainly describes real world entities and their interrelations, organized in a graph; defines possible classes and relations of entities in a schema; allows for potentially interrelating arbitrary entities with each other; covers various topical domains</em>”; he thus rules out ontologies without instances (e.g., DOLCE) and graphs of word senses (e.g., WordNet) as not meeting the first two criteria, while relational databases do not meet the third criterion (due to schema restrictions), and domain-specific graphs (e.g., Geonames) are considered to not meet the fourth criterion; this leaves graphs such as DBpedia, YAGO, Freebase, etc.</li>
				<li><?php echo $references->citet("EhrlingerW16"); ?> also review definitions of “knowledge graph”, where they criticise the <em>Category II</em> definitions based on the argument that knowledge bases are often synonymous with ontologies<?php echo footnote("Prior definitions of an ontology – such as by ". $references->citet("GuarinoOS9") ." – would seem to contradict this conclusion."); ?>, while knowledge graphs are not; they further criticise Google for calling its knowledge graph a “knowledge base”. After reviewing prior definitions of terms such as “knowledge base”, “ontology”, and “knowledge graph”, they propose their definition: “<em>A knowledge graph acquires and integrates information into an ontology and applies a reasoner to derive new knowledge</em>”. In the subsequent discussion, they remark that a knowledge graph is distinguished from an ontology (considered synonymous with a knowledge base) by the provision of reasoning capabilities.</li>
				<li>One of the most detailed technical definitions for a “knowledge graph” is provided by <?php echo $references->citet("BellomariniFGS19"); ?>, who state: “<em>A knowledge graph is a semi-structured data model characterized by three components: (i) a ground extensional component, that is, a set of relational constructs for schema and data (which can be effectively modeled as graphs or generalizations thereof); (ii) an intensional component, that is, a set of inference rules over the constructs of the ground extensional component; (iii) a derived extensional component that can be produced as the result of the application of the inference rules over the ground extensional component (with the so-called “reasoning” process).</em>” They remark that ontologies and rules represent analogous structures, and that a knowledge graph is then a knowledge base extended with reasoning along similar lines to the definition provided by <?php echo $references->citet("EhrlingerW16"); ?>.</li>
			</ul>
			We refer to <?php echo $references->citet("Bergman19"); ?> for a list of further definitions that fit <em>Category&nbsp;III</em>. While having a specific, technical definition for knowledge graphs provides a more solid foundation for their study, as <?php echo $references->citet("Bergman19"); ?> remarks, many such definitions do not seem to fit the current practice of knowledge graphs. For example, it is not clear which of these definitions the Google Knowledge Graph itself – responsible for popularising the idea – would meet (if any). Many of the criteria proposed by such definitions are also orthogonal to the many works in the area of knowledge graph embeddings&nbsp;<?php echo $references->cite("Wang2017KGEmbedding"); ?>.</li>
			<li>While the previous three categories involve (sometimes conflicting) intensional definitions, the fourth category adopts an extensional definition of knowledge graphs, defining them in terms of prominent examples of knowledge graphs, such as DBpedia, Google’s Knowledge Graph, Freebase, YAGO, amongst others&nbsp;<?php echo $references->cite("BonattiDPP18"); ?>. Arguably this category avoids the issue of defining a knowledge graph, rather than actually defining them.</li>
		</ul>
		<p>These categories refer to definitions that have appeared in the academic literature. In terms of enterprise knowledge graphs, an important reference is the paper of <?php echo $references->citet("NoyGJNPT19"); ?>, which has been co-authored by leaders of knowledge graph projects from eBay, Facebook, Google, IBM, and Microsoft, and thus can be seen as representing a form of consensus amongst these companies – who have played a key role in the popularisation of knowledge graphs – on what a “knowledge graph” means in this setting. Specifically this paper states that “<em>a knowledge graph describes objects of interest and connections between them</em>”, and goes on to state that “<em>many practical implementations impose constraints on the links in knowledge graphs by defining a schema or ontology</em>”. They later add “<em>Knowledge graphs and similar structures usually provide a shared substrate of knowledge within an organization, allowing different products and applications to use similar vocabulary and to reuse definitions and descriptions that others create. Furthermore, they usually provide a compact formal representation that developers can use to infer new facts and build up the knowledge</em>”. We interpret this definition as corresponding to <em>Category I</em>, but further acknowledging that while not a necessary condition for a knowledge graph, ontologies and formal representations <em>usually</em> play a key role. The definition we provide at the outset of the paper is largely compatible with that of <?php echo $references->citet("NoyGJNPT19"); ?>.</p>
		</section>
	</section>
<!--	</section>-->
