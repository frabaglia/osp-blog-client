<?php require("header.php") ?>
<div class="main-layout">
	<div class="container u-max-width-l">
		<section>
			<div class="content">
				<div class="button-title-left">
					<div>ABOUT</div>         
				</div>
				<div class="container-navbar">
					<div class="container u-max-width-l">
						<div class="main-content container-fluid">
							<div class="row">
								<div class="seven columns">
<h6 class="subtitle">Short version:</h6>

The Open Syllabus Project (OSP) is an effort to create the first large-scale online database of university course syllabi as a platform for the development of new research, teaching, and administrative tools.

<h6 class="subtitle">Long Version:</h6>

Course syllabi are rich documents that connect scholarly communication and teaching to wider intellectual traditions and institutional missions.

Individually, they offer narrow snapshots of these relationships. Collected, they could do much more. A large-scale, online syllabus archive could provide new ways of understanding some of the core functions of the university. It could enable new lines of inquiry into canon formation, the evolution of disciplines, pedagogical change, and institutional history. It could make curricula more transparent to students, faculty, and administrators, and enable better coordination of course and curricular development. It could introduce new metrics into the conversation about scholarly communication, from tracking the use of open-access publications to measuring how frequently, and in what contexts, faculty members’ works are taught.

The Open Syllabus Project (OSP) is an effort to create the first large-scale online database of university course syllabi as a platform for the development of new research, teaching, and administrative tools. We have this opportunity because, to date, syllabi are almost completely unexploited resources. They are treated as ephemera of the teaching enterprise rather than as its DNA.

OSP development will focus on three broad types of application:

Curriculum Discovery and Management

At present, there is no systematic means of describing the curriculum in—to the best of our knowledge—any fields. Even within individual schools and departments, administrative knowledge of curricular content is often cursory (limited to course titles and descriptions) or provisional (subject to faculty cooperation). Despite the ongoing ‘databasing’ of university operations, discussions about the university teaching mission (such as curricular change or hiring priorities) still take place with few empirical measures of what’s taught or how it relates to the larger field(s) in which schools or programs operate. This is also a problem for students, who make choices about their own educational trajectories with very little information about the content of their courses. Syllabus tools could make discovery and management of courses much easier for all parties, from students seeking a much more nuanced understand of their options, to faculty designing courses and curricula; to administrators working to understand adjacencies and redundancies in key areas.

Field Analysis and Institutional Comparison

If we can collect comprehensive syllabus datasets from a range of institutions, we will have an unprecedented ability to compare the curricula of different schools and programs, and to look more broadly at the content and evolution of fields.

A rich data and tool set will hopefully be able to answer questions such as:

What is the ratio of male to female authors taught in political science classes across a range of schools?

Does the curriculum of US and UK anthropology programs meaningfully reproduce the social and cultural divisions often used to explain the field?

What are the main differences in the curricula of ‘freshwater’ and ‘saltwater’ economics programs in the US? Or between US and European programs?

New Publication Metrics

Academic promotion places great importance on depressingly narrow publication metrics—often little more than the number of publications in a faculty member’s dossier mapped to a rough status hierarchy of journals and publishers. The problems with this incentive system are well known: it places a premium on quantity over quality; it pushes researchers toward micro-specialization and technical language; it generates calls for more public-facing scholarship, which fall on deaf ears; and it produces a de facto devalorization of teaching.

The OSP could diversify these metrics.  Syllabi are a record of peer judgments about the value of texts.  By mapping how frequently and in what contexts works are taught, the OSP could produce metrics that create stronger incentives to write for wider audiences.  It could produce better ways of valuing such contributions, grounded in a culture of academic peer evaluation.  And it could shift the publishing incentives and promotion standards by expanding what we can measure.

The growth of gray literature and less formal “green” models of open access publication also present problems for the current system of publication metrics. Work published online, by NGOs, or in formats outside the journal/monograph model are routinely devalued in academic promotion—in large part because they leave no recognizable footprint. Citation analysis can factor in the long run, but the reputational infrastructure around such work remains weak.  Syllabus tools would provide a means of recognizing the growing range of work published outside traditional academic channels as it is being used in the classroom.

Nice idea.  I tried to do something like this a decade ago.

We know!  The idea of collecting and studying syllabi is not new. Efforts date back to the early nineties, when projects like H-Net and MIT OCW became platforms for sharing teaching materials and other resources among researchers in the humanities and the social sciences. In the early 2000s, Dan Cohen at George Mason University saw the potential to build a much larger archive based on syllabi posted to the web. Using early web crawling tools, Cohen build a database of links to pages that the crawlers identified as syllabi through simple keyword matches. This became known as the “Million Syllabi” archive. Link decay over the last decade has rendered it almost completely obsolete.

Other groups have seen similar potential in syllabi. In 2007–2008, the Social Science Research Council developed a syllabus archiving and analysis project (“More-Syl”) to support projects on interdisciplinary field building. More recently, open-access syllabus collection projects have been proposed by David Weinberger of the Harvard Library Innovation Laboratory and Brian Croxall in the Chronicle of Higher Education.

The majority of syllabus archives are piecemeal and informal. The best are derived from centralized university entities like course review committees. More common are simple departmental archives. These projects have rarely achieved much buy-in from the academic community. The largest cross-institutional effort, OER Commons, contains 6,297 records. The Internet Archive Open Educational Resources database contains 1,312. The Open Course Library contains 81 courses. We are working to identify others.

The Plan

The OSP’s most important architectural decision is to work with syllabi in the form of unstructured documents (PDF, DOCX, and other formats).  This approach allows us to work with the large corpus of existing syllabi, past and present, rather than struggle to build a new corpus from scratch. It also lower barriers to institutional participation because it requires no broad-based changes in faculty practices, falling within existing university workflows.

Server-side natural language processing techniques will be used to extract metadata from the corpus, adding rich layers of information on top of those supplied by institutional partners.

The core database is built with MongoDB, a modern, document-centered, open source database. MongoDB allows for an open metadata schema that can grow and evolve with user demands. This provides a wider scope for application development and also an opening for feedback as developers and users refine or change their schemas.

The OSP will also have a well-documented API, building on standard REST/HTTP queries that will allow third parties to write their own applications.
								</div>
							</div>
							<div class="five columns">
								<img class="centeredImg" src="img/category of partners.png"/>
							</div>
						</div>
						<div class="row-navbar">
						</div>
					</div>
				</div>
				<div class="landing-content">
					<div class="left-content">

					</div>
					<div class="right-content">

					</div>
				</div>
			</div>
		</section>
	</div>
</div>
<?php require("fotter.php") ?>