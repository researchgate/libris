<?php

namespace LibRIS;

use PHPUnit\Framework\TestCase;

class RisReaderTest extends TestCase
{

    /**
     * @var RISReader
     */
    private $ris;

    protected function setUp(): void
    {
        parent::setUp();
        $this->ris = new RISReader();
    }

    public function test_getRecords_derik(): void
    {
        $this->ris->parseFile(__DIR__ . '/derik-test.ris');

        self::assertEquals(
            [
                [
                    'TY' => ['BOOK'],
                    'ID' => ['394'],
                    'T1' => ['Narratology: Introduction to the Theory of Narrative'],
                    'A1' => ['Bal,Mieke'],
                    'PB' => ['University of Toronto Press'],
                    'PY' => ['1997/12/31/'],
                    'SN' => ['0802078060, 9780802078063'],
                ],
            ],
            $this->ris->getRecords()
        );
    }

    public function test_getRecords_Banyuls()
    {
        $this->ris->parseFile(__DIR__ . '/Banyuls.ris');

        self::assertEquals(
            [
                [
                    'TY' =>
                        [
                            'JOUR',
                        ],
                    'AU' =>
                        [
                            'Alonso-Gómez, A.L.',
                            'Alonso-Bedate, M.',
                            'Delgado, M.J.',
                        ],
                    'PY' =>
                        [
                            '1993',
                        ],
                    'TI' =>
                        [
                            'The inhibition by indoleamines (tryptamine and serotonin) of ocular serotonin-N-acetyltransferase from Rana perezi is temperature-dependent',
                        ],
                    'SP' =>
                        [
                            '33-36',
                        ],
                    'JF' =>
                        [
                            'Neuroscience Letters',
                        ],
                    'VL' =>
                        [
                            '155',
                        ],
                    'IS' =>
                        [
                            '1',
                        ],
                    'N1' =>
                        [
                            'AANAT T°C',
                            'Abstr',
                        ],
                    'N2' =>
                        [
                            'Temperature effects on ocular serotonin N-acetyltransferase (NAT) kinetics characteristics from Rana perezi have been studied with respect to tryptamine and serotonin as substrates. Monoamine oxidase (MAO) activity does not interfere in NAT assay at acceptoramine concentrations used in NAT kinetics characterization from R. perezi retina. NAT shows an inhibition by high substrate (serotonin) concentration, which is temperature-dependent. NAT follows the Michaelis-Menten equation at low temperature, whereas at high temperatures (>10°C) an inhibition by serotonin is observed. This inhibition of NAT activity by serotonin could act as an amplification mechanism to increase daily melatonin rhythm amplitude in the retina of ectotherms.',
                        ],
                    'ID' =>
                        [
                            '109',
                        ],
                ],

                [
                    'TY' =>
                        [
                            'JOUR',
                        ],
                    'AU' =>
                        [
                            'Bahri-Sfar, L.',
                            'Lemaire, C.',
                            'Ben Hassine, O.K.',
                            'Bonhomme, F.',
                        ],
                    'PY' =>
                        [
                            '2000',
                        ],
                    'TI' =>
                        [
                            'Fragmentation of sea bass populations in the western and eastern Mediterranean as revealed by microsatellite polymorphism',
                        ],
                    'SP' =>
                        [
                            '929^935',
                        ],
                    'JF' =>
                        [
                            'Proceedings of the Royal Society of London Series B Biological Sciences',
                        ],
                    'VL' =>
                        [
                            '267',
                        ],
                    'IS' =>
                        [
                            '1446',
                        ],
                    'N1' =>
                        [
                            'labrax Genet',
                            'pdf',
                        ],
                    'N2' =>
                        [
                            'We studied the genetic structure at six microsatellite loci of the Mediterranean sea bass (Dicentrarchus labrax) on 19 samples collected from different localities in the western and eastern Mediterranean basins. Significant divergence was found between the two basins. The distance tree showed two separate clusters of populations which matched well with geography, with the noticeable exception of one Egyptian sample which grouped within the western clade, a fact attributable to the introduction of aquaculture broodstock. No heterogeneity was observed within the western basin (theta = 0.0014 and n.s.). However, a significant level of differentiation was found among samples of the eastern Mediterranean (theta = 0.026 and p < 0.001). These results match with water currents but probably not with the dispersal abilities of this fish species. We thus hypothesize that selective forces are at play which limit long-range dispersal, a fact to be taken into account in the debate about speciation processes in the marine environment.',
                        ],
                    'ID' =>
                        [
                            '125',
                        ],
                ],

                [
                    'TY' =>
                        [
                            'JOUR',
                        ],
                    'AU' =>
                        [
                            'Bahri-Sfar, L.',
                            'Lemaire, C.',
                            'Chatain, B.',
                            'Divanach, P.',
                            'Ben Hassine, O.K.',
                            'Bonhomme, F.',
                        ],
                    'PY' =>
                        [
                            '2005',
                        ],
                    'TI' =>
                        [
                            'Impact of aquaculture on the genetic structure of Mediterranean populations of Dicentrarchus',
                        ],
                    'SP' =>
                        [
                            '71-76',
                        ],
                    'JF' =>
                        [
                            'Aquatic Living Resources',
                        ],
                    'VL' =>
                        [
                            '16',
                        ],
                    'IS' =>
                        [
                            '1',
                        ],
                    'N1' =>
                        [
                            'labrax Genet',
                            'pdf',
                        ],
                    'N2' =>
                        [
                            'A phylogeographic analysis based on 6 polymorphic microsatellites was performed on 15 sea bass samples. five from Western Mediterranean, seven from Eastern Mediterranean and three coming from French aquaculture stocks. Among the eastern samples, three did not cluster according to their geographic origin but rather with the occidental group. Furthermore. a somewhat lower allelic diversity was observed within these particular samples, indicating that they originated from a limited number of progenitors of foreign origin. Among the aquaculture stocks, only one revealed a significant reduction of genetic variability, indicating that these stocks are largely outbred and open to wild fishes. The fact that the use of occidental fingerlings to seed broodstocks in the eastern basin facilities dates back to the early 80s at the latest poses the question of the biological mechanisms explaining the maintainance of fish from occidental origin within an oriental context for two or three generations.',
                        ],
                    'ID' =>
                        [
                            '133',
                        ],
                ],

                [
                    'TY' =>
                        [
                            'JOUR',
                        ],
                    'AU' =>
                        [
                            'Benyassi, A.',
                            'Schwartz, C.',
                            'Coon, S.L.',
                            'Klein, D.C.',
                            'Falcon, J.',
                        ],
                    'PY' =>
                        [
                            '2000',
                        ],
                    'TI' =>
                        [
                            'Melatonin synthesis: arylalkylamine N-acetyltransferases in trout retina and pineal organ are different',
                        ],
                    'SP' =>
                        [
                            '255-8',
                        ],
                    'JF' =>
                        [
                            'Neuroreport',
                        ],
                    'VL' =>
                        [
                            '11',
                        ],
                    'IS' =>
                        [
                            '2',
                        ],
                    'Y2' =>
                        [
                            'Feb 7',
                        ],
                    'N1' =>
                        [
                            '10674465',
                            'AANAT T°C',
                            'pdf',
                        ],
                    'KW' =>
                        [
                            'Acetyl Coenzyme A/metabolism/pharmacology Animals Arylamine N-Acetyltransferase/*metabolism/pharmacology Buffers Dose-Response Relationship, Drug Enzyme Activation/drug effects/physiology Female Hydrogen-Ion Concentration Melatonin/*biosynthesis Oncorhynchus mykiss/*metabolism Phenethylamines/metabolism/pharmacology Pineal Gland/*enzymology Proteins/metabolism Retina/*enzymology Temperature',
                        ],
                    'N2' =>
                        [
                            'Serotonin N-acetyltransferase (AANAT) is the first enzyme in the conversion of serotonin to melatonin. Changes in AANAT activity determine the daily rhythm in melatonin secretion. Two AANAT genes have been identified in the pike, pAANAT-1 and pAANAT-2, expressed in the retina and in the pineal, respectively. The genes preferentially expressed in these tissues encode proteins with distinctly different kinetic characteristics. Like the pike, trout retina primarily expresses the AANAT-1 gene and trout pineal primarily expresses the AANAT-2 gene. Here we show that the kinetic characteristics of AANAT in these tissues differ as in pike. These differences include optimal temperature for activity (pineal: 12 degrees C; retina: 25 degrees C) and relative affinity for indoleethylamines compared to phenylethylamines. In addition, retinal AANAT exhibited substrate inhibition, which was not seen with pineal AANAT. The kinetic differences between AANAT-1 and AANAT-2 appear to be defining characteristics of these gene subfamilies, and are not species specific.',
                        ],
                    'AD' =>
                        [
                            'Laboratoire de Neurobiologie Cellulaire et Neuroendocrinologie, CNRS UMR 6558, Universite de Poitiers, France.',
                        ],
                    'ID' =>
                        [
                            '99',
                        ],
                ],

                [
                    'TY' =>
                        [
                            'JOUR',
                        ],
                    'AU' =>
                        [
                            'Besseau, L.',
                            'Benyassi, A.',
                            'Moller, M.',
                            'Coon, S.L.',
                            'Weller, J.L.',
                            'Boeuf, G.',
                            'Klein, D.C.',
                            'Falcon, J.',
                        ],
                    'PY' =>
                        [
                            '2006',
                        ],
                    'TI' =>
                        [
                            'Melatonin pathway: breaking the \'high-at-night\' rule in trout retina',
                        ],
                    'SP' =>
                        [
                            '620-7',
                        ],
                    'JF' =>
                        [
                            'Exp Eye Res',
                        ],
                    'VL' =>
                        [
                            '82',
                        ],
                    'IS' =>
                        [
                            '4',
                        ],
                    'Y2' =>
                        [
                            'Apr',
                        ],
                    'N1' =>
                        [
                            '16289161',
                            'AANAT',
                            'pdf',
                        ],
                    'KW' =>
                        [
                            'Acetylserotonin O-Methyltransferase/metabolism Animals Arylalkylamine N-Acetyltransferase/metabolism Circadian Rhythm/physiology Dark Adaptation/physiology Female Melatonin/*metabolism Oncorhynchus mykiss/*metabolism Photic Stimulation/methods Pineal Gland/metabolism RNA, Messenger/analysis Retina/*metabolism',
                        ],
                    'N2' =>
                        [
                            'Pineal melatonin synthesis increases at night in all vertebrates, due to an increase in the activity of arylalkylamine N-acetyltransferase (AANAT). Melatonin is also synthesized in the retina of some vertebrates and it is generally assumed that patterns of pineal and retinal AANAT activity and melatonin production are similar, i.e. they exhibit a high-at-night pattern. However, the situation in fish is atypical because in some cases retinal melatonin increases during the day, not the night. Consistent with this, we now report that light increases the activity and abundance of the AANAT expressed in trout retina, AANAT1, at a time when the activity and abundance of pineal AANAT, AANAT2, decreases. Likewise, exposure to darkness causes retinal AANAT protein and activity to decrease coincident with increases in the pineal gland. Rhythmic changes in retinal AANAT protein and activity are 180 degrees out of phase with those of retinal AANAT1 mRNA; all appear to be driven by environmental lighting, not by a circadian oscillator. The atypical high-during-the-day pattern of retinal AANAT1 activity may reflect an evolutionary adaptation that optimizes an autocrine/paracrine signaling role of melatonin in photoadaptation and phototransduction; alternatively, it might reflect an adaptation that broadens and enhances aromatic amine detoxification in the retina.',
                        ],
                    'AD' =>
                        [
                            'Laboratoire Arago, Universite P&M Curie (UPMC) and CNRS, UMR 7628, BP44, 66651 Banyuls/Mer-Cedex, France.',
                        ],
                    'ID' =>
                        [
                            '97',
                        ],
                ],

                [
                    'TY' =>
                        [
                            'CONF',
                        ],
                    'AU' =>
                        [
                            'Boeuf, G.',
                            'Lasserre, P.',
                        ],
                    'PY' =>
                        [
                            '1978',
                        ],
                    'TI' =>
                        [
                            'Aspects de la régulation osmotique chez le bar juvénile (Dicentrarchus labrax) en élevage et introduit dans les lagunes amenagées de Certes bassin d\'Arcachon (Gitonde)',
                        ],
                    'BT' =>
                        [
                            'Colloque National Ecotron',
                        ],
                    'CY' =>
                        [
                            'Brest',
                        ],
                    'PB' =>
                        [
                            'Publ. Sci. Tech. CNEXO',
                        ],
                    'VL' =>
                        [
                            '7',
                        ],
                    'SP' =>
                        [
                            '673-688',
                        ],
                    'N1' =>
                        [
                            'Aspects de la régulation osmotique chez le bar juvénile (Dicentrarchus labrax) en élevage et introduit dans les lagunes amenagées de Certes bassin d\'Arcachon (Gitonde)',
                            'labrax salt',
                            'paper',
                        ],
                    'ID' =>
                        [
                            '137',
                        ],
                ],

                [
                    'TY' =>
                        [
                            'JOUR',
                        ],
                    'AU' =>
                        [
                            'Bonhomme, F.',
                            'Naciri, M.',
                            'Bahri-Sfar, L.',
                            'Lemaire, C.',
                        ],
                    'PY' =>
                        [
                            '2002',
                        ],
                    'TI' =>
                        [
                            'Comparative analysis of genetic structure of two closely related sympatric marine fish species Dicentrarchus labrax and Dicentrarchus punctatus',
                        ],
                    'SP' =>
                        [
                            '213-220',
                        ],
                    'JF' =>
                        [
                            'Comptes Rendus Biologies',
                        ],
                    'VL' =>
                        [
                            '325',
                        ],
                    'IS' =>
                        [
                            '3',
                        ],
                    'N1' =>
                        [
                            'labrax Genet',
                            'pdf',
                        ],
                    'N2' =>
                        [
                            'We present here the genetic structure existing among five samples of the spotted sea bass Dicentrarchus punctatus, and we compare it to what prevails in the common sea bass D. labrax, a congeneric species sampled on almost the same geographical range. A genetic distance tree inferred from the polymorphism at six microsatellite loci shows a distinct pattern for the two species. D. labrax samples appears to be genetically more homogeneous with a global Fst of 3% as compared to the 10% observed at D. punctatus, indicating a lesser level of gene flow in the latter species. While appearing more differentiated, D. punctatus presents no clear geographical organisation of its genetic variability in opposition to D. labrax samples. This allows us to propose this pair of closely relative species as a good candidate for the study by comparative analysis of the biological and/or historical factors affecting genetic differentiation in marine environment.',
                        ],
                    'ID' =>
                        [
                            '132',
                        ],
                ],

                [
                    'TY' =>
                        [
                            'JOUR',
                        ],
                    'AU' =>
                        [
                            'Breton, G.',
                            'Kay, S.A.',
                        ],
                    'PY' =>
                        [
                            '2007',
                        ],
                    'TI' =>
                        [
                            'Plant biology: time for growth',
                        ],
                    'SP' =>
                        [
                            '265-6',
                        ],
                    'JF' =>
                        [
                            'Nature',
                        ],
                    'VL' =>
                        [
                            '448',
                        ],
                    'IS' =>
                        [
                            '7151',
                        ],
                    'Y2' =>
                        [
                            'Jul 19',
                        ],
                    'N1' =>
                        [
                            '17637650',
                            'Clock plant',
                            'pdf',
                        ],
                    'KW' =>
                        [
                            'Arabidopsis/genetics/*growth & development/*radiation effects Arabidopsis Proteins/genetics/metabolism Biological Clocks/*physiology/radiation effects Circadian Rhythm/*physiology/radiation effects Gene Expression Regulation, Plant Hypocotyl/genetics/growth & development/radiation effects *Light Seedling/genetics/growth & development/radiation effects Time Factors',
                        ],
                    'UR' =>
                        [
                            'http://www.ncbi.nlm.nih.gov/entrez/query.fcgi?cmd=Retrieve&db=PubMed&dopt=Citation&list_uids=17637650',
                        ],
                    'ID' =>
                        [
                            '214',
                        ],
                ],

                [
                    'TY' =>
                        [
                            'JOUR',
                        ],
                    'AU' =>
                        [
                            'Canosa, L.F.',
                            'Chang, J.P.',
                            'Peter, R.E.',
                        ],
                    'PY' =>
                        [
                            '2007',
                        ],
                    'TI' =>
                        [
                            'Neuroendocrine control of growth hormone in fish',
                        ],
                    'SP' =>
                        [
                            '1-26',
                        ],
                    'JF' =>
                        [
                            'Gen Comp Endocrinol',
                        ],
                    'VL' =>
                        [
                            '151',
                        ],
                    'IS' =>
                        [
                            '1',
                        ],
                    'N1' =>
                        [
                            'Rev Hormones',
                            'pdf',
                        ],
                    'N2' =>
                        [
                            'The biological actions of growth hormone (GH) are pleiotropic, including growth promotion, energy mobilization, gonadal development, appetite, and social behavior. Accordingly, the regulatory network for GH is complex and includes many endocrine and environmental factors. In fish, the neuroendocrine control of GH is multifactorial with multiple inhibitors and stimulators of pituitary GH secretion. In fish, GH release is under a tonic negative control exerted mainly by somatostatin. Sex steroid hormones and nutritional status influence the level of brain expression and effectiveness of some of these GH neuroendocrine regulatory factors, suggesting that their relative importance differs under different physiological conditions. At the pituitary level, some, if not all, somatotropes can respond to multiple regulators. Therefore, ligand- and function-specificity, as well as the integrative responses to multiple signals must be achieved at the level of signal transduction mechanisms. Results from investigations on a limited number of stimulatory and inhibitory GH-release regulators indicate that activation of different but convergent intracellular pathways and the utilization of specific intracellular Ca(2+) stores are some of the strategies utilized. However, more work remains to be done in order to better understand the integrative mechanisms of signal transduction at the somatotrope level and the relevance of various GH regulators in different physiological circumstances.',
                        ],
                    'AD' =>
                        [
                            'Department of Biological Sciences, University of Alberta, Edmonton, Alta., Canada',
                        ],
                    'ID' =>
                        [
                            '108',
                        ],
                ],

                [
                    'TY' =>
                        [
                            'JOUR',
                        ],
                    'AU' =>
                        [
                            'Coon, S.L.',
                            'Begay, V.',
                            'Deurloo, D.',
                            'Falcon, J.',
                            'Klein, D.C.',
                        ],
                    'PY' =>
                        [
                            '1999',
                        ],
                    'TI' =>
                        [
                            'Two arylalkylamine N-acetyltransferase genes mediate melatonin synthesis in fish',
                        ],
                    'SP' =>
                        [
                            '9076-82',
                        ],
                    'JF' =>
                        [
                            'J Biol Chem',
                        ],
                    'VL' =>
                        [
                            '274',
                        ],
                    'IS' =>
                        [
                            '13',
                        ],
                    'Y2' =>
                        [
                            'Mar 26',
                        ],
                    'N1' =>
                        [
                            '10085157',
                            'AANAT',
                            'pdf',
                        ],
                    'KW' =>
                        [
                            'Amino Acid Sequence Animals Arylamine N-Acetyltransferase/chemistry/*genetics Circadian Rhythm/genetics Cloning, Molecular Evolution, Molecular Fishes/*genetics/metabolism Gene Expression Regulation/genetics Kinetics Melatonin/*biosynthesis Molecular Sequence Data Pineal Gland/enzymology RNA, Messenger/metabolism Recombinant Proteins/genetics Retina/enzymology Sequence Alignment Sequence Analysis, DNA Serotonin/metabolism',
                        ],
                    'N2' =>
                        [
                            'Serotonin N-acetyltransferase (arylalkylamine N-acetyltransferase, AANAT, EC 2.3.1.87) is the first enzyme in the conversion of serotonin to melatonin. Large changes in AANAT activity play an important role in the daily rhythms in melatonin production. Although a single AANAT gene has been found in mammals and the chicken, we have now identified two AANAT genes in fish. These genes are designated AANAT-1 and AANAT-2; all known AANATs belong to the AANAT-1 subfamily. Pike AANAT-1 is nearly exclusively expressed in the retina and AANAT-2 in the pineal gland. The abundance of each mRNA changes on a circadian basis, with retinal AANAT-1 mRNA peaking in late afternoon and pineal AANAT-2 mRNA peaking 6 h later. The pike AANAT-1 and AANAT-2 enzymes (66% identical amino acids) exhibit marked differences in their affinity for serotonin, relative affinity for indoleethylamines versus phenylethylamines and temperature-activity relationships. Two AANAT genes also exist in another fish, the trout. The evolution of two AANATs may represent a strategy to optimally meet tissue-related requirements for synthesis of melatonin: pineal melatonin serves an endocrine role and retinal melatonin plays a paracrine role.',
                        ],
                    'AD' =>
                        [
                            'Section on Neuroendocrinology, Laboratory of Developmental Neurobiology, NICHD, National Institutes of Health, Bethesda, Maryland 20892-4480, USA.',
                        ],
                    'ID' =>
                        [
                            '86',
                        ],
                ],

                [
                    'TY' =>
                        [
                            'JOUR',
                        ],
                    'AU' =>
                        [
                            'Coon, S.L.',
                            'Klein, D.C.',
                        ],
                    'PY' =>
                        [
                            '2006',
                        ],
                    'TI' =>
                        [
                            'Evolution of arylalkylamine N-acetyltransferase: emergence and divergence',
                        ],
                    'SP' =>
                        [
                            '2-10',
                        ],
                    'JF' =>
                        [
                            'Mol Cell Endocrinol',
                        ],
                    'VL' =>
                        [
                            '252',
                        ],
                    'IS' =>
                        [
                            '1-2',
                        ],
                    'N1' =>
                        [
                            'AANAT evol',
                            'pdf',
                        ],
                    'N2' =>
                        [
                            'The melatonin rhythm-generating enzyme, arylalkylamine N-acetyltransferase (AANAT) is known to have recognizable ancient homologs in bacteria and fungi, but not in other eukaryotes. Analysis of new cDNA and genomic sequences has identified several additional homologs in other groupings. First, an AANAT homolog has been found in the genome of the cephalochordate amphioxus, representing the oldest homolog in chordates. Second, two AANAT homologs have been identified in unicellular green algae. The homologs in amphioxus, unicellular green algae, fungi and bacteria are similarly primitive in that they lack sequences found in vertebrate AANATs that are involved in regulation and that facilitate binding and catalysis. In addition, all these sequences are intronless. These features are consistent with horizontal transfer of the AANAT ancestor from bacteria to green algae, fungi and chordates. Lastly, a third AANAT gene has been found in teleost fish, suggesting that AANAT genes serve multiple functions in addition to melatonin synthesis.',
                        ],
                    'AD' =>
                        [
                            'Section on Neuroendocrinology, Office of the Scientific Director, National Institute of Child Health and Human Development, National Institutes of Health, Bethesda, MD 20894, USA. coons@mail.nih.gov',
                        ],
                    'ID' =>
                        [
                            '113',
                        ],
                ],

                [
                    'TY' =>
                        [
                            'JOUR',
                        ],
                    'AU' =>
                        [
                            'Davis, A.J.',
                            'Jenkinson, L.S.',
                            'Lawton, J.H.',
                            'Shorrocks, B.',
                            'Wood, S.',
                        ],
                    'PY' =>
                        [
                            '1998',
                        ],
                    'TI' =>
                        [
                            'Making mistakes when predicting shifts in species range in response to global warming',
                        ],
                    'JF' =>
                        [
                            'Nature',
                        ],
                    'IS' =>
                        [
                            '783-786',
                        ],
                    'N1' =>
                        [
                            'AANAT T°C',
                            'pdf',
                        ],
                    'N2' =>
                        [
                            'Many attempts to predict the biotic responses to climate change rely on the |[lsquo]|climate envelope|[rsquo]| approach1, 2, 3, in which the current distribution of a species is mapped in climate-space and then, if the position of that climate-space changes, the distribution of the species is predicted to shift accordingly4, 5, 6. The flaw in this approach is that distributions of species also reflect the influence of interactions with other species7, 8, 9, 10, so predictions based on climate envelopes may be very misleading if the interactions between species are altered by climate change11. An additional problem is that current distributions may be the result of sources and sinks12, in which species appear to thrive in places where they really persist only because individuals disperse into them from elsewhere13,14. Here we use microcosm experiments on simple but realistic assemblages to show how misleading the climate envelope approach can be. We show that dispersal and interactions, which are important elements of population dynamics15, must be included in predictions of biotic responses to climate change',
                        ],
                    'ID' =>
                        [
                            '205',
                        ],
                ],

                [
                    'TY' =>
                        [
                            'JOUR',
                        ],
                    'AU' =>
                        [
                            'Delarbre, C.',
                            'Spruytb, N.',
                            'Delmarreb, C.',
                            'Gallutc, C.',
                            'Barrielc, V.',
                            'Janvierd, P.',
                            'Laudetb, V.',
                            'Gachelina, G.',
                        ],
                    'PY' =>
                        [
                            '1998',
                        ],
                    'TI' =>
                        [
                            'The Complete Nucleotide Sequence of the Mitochondrial DNA of the Dogfish, Scyliorhinus canicula',
                        ],
                    'SP' =>
                        [
                            '331-344',
                        ],
                    'JF' =>
                        [
                            'Genetics',
                        ],
                    'VL' =>
                        [
                            '150',
                        ],
                    'N1' =>
                        [
                            'Phylogeny',
                            'pdf',
                        ],
                    'N2' =>
                        [
                            'We have determined the complete nucleotide sequence of the mitochondrial DNA (mtDNA) of the dogfish, Scyliorhinus canicula. The 16,697-bp-long mtDNA possesses a gene organization identical to that of the Osteichthyes, but different from that of the sea lamprey Petromyzon marinus. The main features of the mtDNA of osteichthyans were thus established in the common ancestor to chondrichthyans and osteichthyans. The phylogenetic analysis confirms that the Chondrichthyes are the sister group of the Osteichthyes.',
                        ],
                    'ID' =>
                        [
                            '119',
                        ],
                ],

                [
                    'TY' =>
                        [
                            'JOUR',
                        ],
                    'AU' =>
                        [
                            'Dijk, D.J.',
                            'Archer, S.N.',
                        ],
                    'PY' =>
                        [
                            '2009',
                        ],
                    'TI' =>
                        [
                            'Light, Sleep, and Circadian Rhythms: Together Again',
                        ],
                    'SP' =>
                        [
                            'e1000145',
                        ],
                    'JF' =>
                        [
                            'PLoS Biology',
                        ],
                    'VL' =>
                        [
                            '7',
                        ],
                    'IS' =>
                        [
                            '6',
                        ],
                    'N1' =>
                        [
                            'Rhythm',
                            'pdf',
                        ],
                    'N2' =>
                        [
                            'This is an open-access article distributed under the terms of the Creative Commons Attribution License, which permits unrestricted use, distribution, and reproduction in any medium, provided the original author and source are credited. Funding: The authors\' research on light, sleep, and circadian rhythms is supported by the BBSRC, AFOSR, Wellcome Trust, and Philips Lighting. The funders had no role in study design, data collection and analysis, decision to publish, or preparation of the manuscript. Competing interests: The authors have declared that no competing interests exist.',
                        ],
                    'ID' =>
                        [
                            '207',
                        ],
                ],

                [
                    'TY' =>
                        [
                            'JOUR',
                        ],
                    'AU' =>
                        [
                            'Falcón, J.',
                        ],
                    'PY' =>
                        [
                            '1999',
                        ],
                    'TI' =>
                        [
                            'Cellular circadian clocks in the pineal',
                        ],
                    'SP' =>
                        [
                            '121-62',
                        ],
                    'JF' =>
                        [
                            'Prog Neurobiol',
                        ],
                    'VL' =>
                        [
                            '58',
                        ],
                    'IS' =>
                        [
                            '2',
                        ],
                    'Y2' =>
                        [
                            'Jun',
                        ],
                    'N1' =>
                        [
                            '10338357',
                            'AANAT pineal',
                            'pdf',
                        ],
                    'KW' =>
                        [
                            'Animals Biological Clocks/*physiology *Circadian Rhythm Melatonin/biosynthesis/metabolism Photoreceptors, Vertebrate/physiology Phototransduction/physiology Pineal Gland/anatomy & histology/cytology/innervation/*physiology',
                        ],
                    'N2' =>
                        [
                            'Daily rhythms are a fundamental feature of all living organisms; most are synchronized by the 24 hr light/dark (LD) cycle. In most species, these rhythms are generated by a circadian system, and free run under constant conditions with a period close to 24 hr. To function properly the system needs a pacemaker or clock, an entrainment pathway to the clock, and one or more output signals. In vertebrates, the pineal hormone melatonin is one of these signals which functions as an internal time-keeping molecule. Its production is high at night and low during day. Evidence indicates that each melatonin producing cell of the pineal constitutes a circadian system per se in non-mammalian vertebrates. In addition to the melatonin generating system, they contain the clock as well as the photoreceptive unit. This is despite the fact that these cells have been profoundly modified from fish to birds. Modifications include a regression of the photoreceptive capacities, and of the ability to transmit a nervous message to the brain. The ultimate stage of this evolutionary process leads to the definitive loss of both the direct photosensitivity and the clock, as observed in the pineal of mammals. This review focuses on the functional properties of the cellular circadian clocks of non-mammalian vertebrates. How functions the clock? How is the photoreceptive unit linked to it and how is the clock linked to its output signal? These questions are addressed in light of past and recent data obtained in vertebrates, as well as invertebrates and unicellulars.',
                        ],
                    'AD' =>
                        [
                            'CNRS UMR 6558, Departement des Neurosciences, Universite de Poitiers, France. Jack.Falcon@campus.univ-poitiers.fr',
                        ],
                    'ID' =>
                        [
                            '79',
                        ],
                ],

                [
                    'TY' =>
                        [
                            'JOUR',
                        ],
                    'AU' =>
                        [
                            'Falcón, J.',
                            'Besseau, L.',
                            'Fuentès, M.',
                            'Sauzet, S.',
                            'Magnanou, E.',
                            'Boeuf, G.',
                        ],
                    'PY' =>
                        [
                            '2009',
                        ],
                    'TI' =>
                        [
                            'Structural and functional evolution of the pineal melatonin system in vertebrates.',
                        ],
                    'SP' =>
                        [
                            '101-111',
                        ],
                    'JF' =>
                        [
                            'Trends in Comparative Endocrinology and Neurobiology: Ann N Y Acad Sci',
                        ],
                    'VL' =>
                        [
                            '1163',
                        ],
                    'N1' =>
                        [
                            'Clock Review',
                            'pdf',
                        ],
                    'N2' =>
                        [
                            'In most species daily rhythms are synchronized by the photoperiodic cycle. They are generated by the circadian system, which is made of a pacemaker, an entrainment pathway to this clock, and one or more output signals. In vertebrates, melatonin produced by the pineal organ is one of these outputs. The  production of this time-keeping hormone is high at night and low during the day. Despite the fact that this is a well-preserved pattern, the pathways through which the photoperiodic information controls the rhythm have been profoundly modified from early vertebrates to mammals. The photoperiodic control is direct in fish and frogs and indirect in mammals. In the former, full circadian systems are found in photoreceptor cells of the pineal organ, retina, and possibly brain, thus forming a network where melatonin could be a hormonal synchronizer. In the latter, the three elements of a circadian system are scattered: the photoreceptive units are in the eyes, the clocks are in the suprachiasmatic nuclei of the hypothalamus, and the melatonin-producing units are in the pineal cells. Intermediate situations are observed in sauropsids. Differences are also seen at the level of the arylalkylamine N-acetyltransferase (AANAT), the enzyme responsible for the daily variations in melatonin production. In contrast to tetrapods, teleost fish AANATs are duplicated and display tissue-specific expression; also, pineal AANAT is special--it responds to temperature in a species-specific manner, which reflects the fish ecophysiological preferences. This review summarizes anatomical, structural, and molecular aspects of the evolution of the melatonin-producing system in vertebrates.',
                        ],
                    'ID' =>
                        [
                            '136',
                        ],
                ],

                [
                    'TY' =>
                        [
                            'JOUR',
                        ],
                    'AU' =>
                        [
                            'Falcón, J.',
                            'Besseau, L.',
                            'Sauzet, S.',
                            'Boeuf, G.',
                        ],
                    'PY' =>
                        [
                            '2007',
                        ],
                    'TI' =>
                        [
                            'Melatonin effects on the hypothalamo-pituitary axis in fish',
                        ],
                    'SP' =>
                        [
                            '81-8',
                        ],
                    'JF' =>
                        [
                            'Trends in Endocrinolology and Metabolism',
                        ],
                    'VL' =>
                        [
                            '18',
                        ],
                    'IS' =>
                        [
                            '2',
                        ],
                    'Y2' =>
                        [
                            'Mar',
                        ],
                    'N1' =>
                        [
                            '17267239',
                            'Clock Review',
                            'pdf',
                        ],
                    'KW' =>
                        [
                            'Animals Evolution, Molecular Fishes/genetics/growth & development/*physiology Hypothalamo-Hypophyseal System/*drug effects/physiology Melatonin/*pharmacology Models, Biological Pineal Gland/physiology Pituitary-Adrenal System/*drug effects/physiology Receptors, Melatonin/genetics/physiology Reproduction/physiology',
                        ],
                    'N2' =>
                        [
                            'Melatonin, a hormonal output signal of vertebrate circadian clocks, contributes to synchronizing behaviors and neuroendocrine regulations with the daily and annual variations of the photoperiod. Conservation and diversity characterize the melatonin system: conservation because its pattern of production and synchronizing properties are a constant among vertebrates; and diversity because regulation of both its synthesis and modes of action have been profoundly modified during vertebrate evolution. Studies of the targets and modes of action of melatonin in fish, and their parallels in mammals, are of interest to our understanding of time-related neuroendocrine regulation and its evolution from fish to mammals, as well as for aquacultural purposes.',
                        ],
                    'AD' =>
                        [
                            'Laboratoire Arago, UMR 7628/GDR2821, Universite Pierre et Marie Curie (UPMC) and CNRS, B.P. 44, Avenue du Fontaule, F-66651, Banyuls-sur-Mer Cedex, France. falcon@obs-banyuls.fr',
                        ],
                    'UR' =>
                        [
                            'http://www.ncbi.nlm.nih.gov/entrez/query.fcgi?cmd=Retrieve&db=PubMed&dopt=Citation&list_uids=17267239',
                        ],
                    'ID' =>
                        [
                            '206',
                        ],
                ],

                [
                    'TY' =>
                        [
                            'JOUR',
                        ],
                    'AU' =>
                        [
                            'Falcón, J.',
                            'Bolliet, V.',
                            'Collin, J.P.',
                        ],
                    'PY' =>
                        [
                            '1996',
                        ],
                    'TI' =>
                        [
                            'Partial characterization of serotonin N - acetyltransferases from northern pike (Esox lucius, L.) pineal organ and retina: effects of temperature',
                        ],
                    'SP' =>
                        [
                            '386-93',
                        ],
                    'JF' =>
                        [
                            'Pflugers Arch',
                        ],
                    'VL' =>
                        [
                            '432',
                        ],
                    'IS' =>
                        [
                            '3',
                        ],
                    'Y2' =>
                        [
                            'Jul',
                        ],
                    'N1' =>
                        [
                            '8765997',
                            'AANAT T°C',
                            'Abstr',
                        ],
                    'KW' =>
                        [
                            'Acetyl Coenzyme A/metabolism Animals Arylamine N-Acetyltransferase/*metabolism Esocidae/*metabolism Female Hydrogen-Ion Concentration Kinetics Male Melatonin/metabolism Pineal Gland/*enzymology Proteins/metabolism Retina/*enzymology Temperature Tryptamines/metabolism',
                        ],
                    'N2' =>
                        [
                            'In vertebrates, the nocturnal rise in pineal organ and retinal melatonin synthesis results from the increase in the activity of the serotonin N-acetyltransferase (NAT), a cAMP-dependent enzyme. In the fish pineal organ in culture, light and temperature act in a similar manner on cAMP content and NAT activity. It is not known whether the effects of temperature are mediated through cAMP or through modifications of NAT kinetics. The present study was designed: (1) to find out whether NAT activity from pineal organ homogenates is similar to NAT activity from pineal organs in culture, with regard to variations in temperature, and (2) to compare NAT activity from the pineal organ and the retina. Pineal organ and retinal NAT activity increased linearly with protein concentrations. Higher activities were obtained with 0.2 mol/l of phosphate buffer, pH 6. Higher molarity or a higher pH induced a decrease in retinal and pineal organ NAT activity: retinal NAT was more sensitive than pineal organ NAT to changes in molarity, whereas the opposite held true as far as pH was concerned. Pineal organ and retinal NAT obeyed the Michaelis-Menten equation with respect to increasing concentrations of acetyl-coenzyme A. With increasing concentrations of tryptamine: (1) pineal organ NAT activity increased in a manner suggesting positive co-operativity, (2) retinal NAT displayed, after an initial increase, inhibition by substrate. The kinetics of the reactions were temperature dependent. Maximal activities were reached at 18/20 degrees C in the pineal organ and at 37 degrees C in the retina. The present study is the first to describe the optimum conditions for the assay of NAT activity in homogenates from the retina of fish and from the pineal organ of poikilotherms, and also the first to compare some characteristics of NAT activity from these two analogous organs. Our results suggest that the effects of temperature on melatonin production are mediated, at least in part, through modifications of NAT kinetics. Future studies will aim to clarify whether the activities measured in the pineal organ and retinal homogenates reflect the presence of one or of several enzymes.',
                        ],
                    'AD' =>
                        [
                            'Laboratoire de Neurobiologie et Neuroendocrinologie Cellulaires, URA CNRS 1869',
                        ],
                    'ID' =>
                        [
                            '70',
                        ],
                ],

                [
                    'TY' =>
                        [
                            'JOUR',
                        ],
                    'AU' =>
                        [
                            'Fields, P.A.',
                            'Somero, G.N.',
                        ],
                    'PY' =>
                        [
                            '1998',
                        ],
                    'TI' =>
                        [
                            'Hot spots in cold adaptation: Localized increases in conformational flexibility in lactate dehydrogenase A4 orthologs of Antarctic notothenioid fishes',
                        ],
                    'SP' =>
                        [
                            '11476-11481',
                        ],
                    'JF' =>
                        [
                            'PNAS',
                        ],
                    'VL' =>
                        [
                            '95',
                        ],
                    'IS' =>
                        [
                            '19',
                        ],
                    'N1' =>
                        [
                            'AANAT T°C',
                            'pdf',
                        ],
                    'N2' =>
                        [
                            'To elucidate mechanisms of enzymatic adaptation to extreme cold, we determined kinetic properties, thermal stabilities, and deduced amino acid sequences of lactate dehydrogenase A4 (A4-LDH) from nine Antarctic ( 1.86 to 1°C) and three South American (4 to 10°C) notothenioid teleosts. Higher Michaelis-Menten constants (Km) and catalytic rate constants (kcat) distinguish orthologs of Antarctic from those of South American species, but no relationship exists between adaptation temperature and the rate at which activity is lost because of heat denaturation. In all species, active site residues are conserved fully, and differences in kcat and Km are caused by substitutions elsewhere in the molecule. Within geographic groups, identical kinetic properties are generated by different substitutions. By combining our data with A4-LDH sequences for other vertebrates and information on roles played by localized conformational changes in setting kcat, we conclude that notothenioid A4-LDHs have adapted to cold temperatures by increases in flexibility in small areas of the molecule that affect the mobility of adjacent active-site structures. Using these findings, we propose a model that explains linked temperature-adaptive variation in Km and kcat. Changes in sequence that increase flexibility of regions of the enzyme involved in catalytic conformational changes may reduce energy (enthalpy) barriers to these rate-governing shifts in conformation and, thereby, increase kcat. However, at a common temperature of measurement, the higher configurational entropy of a cold-adapted enzyme may foster conformations that bind ligands poorly, leading to high Km values relative to warm-adapted orthologs.',
                        ],
                    'AD' =>
                        [
                            'Hopkins Marine Station, Stanford University, Pacific Grove, CA 93950-3094',
                        ],
                    'ID' =>
                        [
                            '110',
                        ],
                ],

                [
                    'TY' =>
                        [
                            'JOUR',
                        ],
                    'AU' =>
                        [
                            'Isorna, E.',
                            'Besseau, L.',
                            'Boeuf, G.',
                            'Desdevises, Y.',
                            'Vuilleumier, R.',
                            'Alonso-Gomez, A.L.',
                            'Delgado, M.J.',
                            'Falcon, J.',
                        ],
                    'PY' =>
                        [
                            '2006',
                        ],
                    'TI' =>
                        [
                            'Retinal, pineal and diencephalic expression of frog arylalkylamine N-acetyltransferase-1',
                        ],
                    'SP' =>
                        [
                            '11-8',
                        ],
                    'JF' =>
                        [
                            'Mol Cell Endocrinol',
                        ],
                    'VL' =>
                        [
                            '252',
                        ],
                    'IS' =>
                        [
                            '1-2',
                        ],
                    'Y2' =>
                        [
                            'Jun 27',
                        ],
                    'N1' =>
                        [
                            'AANAT evol',
                            'pdf',
                        ],
                    'KW' =>
                        [
                            'Amino Acid Sequence Animals Arylalkylamine N-Acetyltransferase/*genetics Base Sequence Cloning, Molecular Diencephalon/*enzymology Epididymis/enzymology Evolution, Molecular Humans Male Phylogeny Pineal Gland/*enzymology RNA, Messenger/genetics Ranidae/classification/*genetics Retina/*enzymology',
                        ],
                    'N2' =>
                        [
                            'The arylalkylamine N-acetyltransferase (AANAT) is a key enzyme in the rhythmic production of melatonin. Two Aanats are expressed in Teleost fish (Aanat1 in the retina and Aanat2 in the pineal organ) but only Aanat1 is found in tetrapods. This study reports the cloning of Aanat1 from R. perezi. Transcripts were mainly expressed in the retina, diencephalon, intestine and testis. In the retina and pineal organ, Aanat1 expression was in the photoreceptor cells. Expression was also seen in ependymal cells of the 3rd ventricle and discrete cells of the suprachiasmatic area. The expression of Aanat1 in both the retina and pineal organ, and the absence of Aanat2 suggests that green frog resembles more to birds and mammals than to Teleost fish, as far as Aanat is concerned. The significance of Aanat1 in extra-pineal and extra-retinal tissues remains to be elucidated; in the diencephalon, it might be associated to the so-called deep brain photoreceptor cells.',
                        ],
                    'AD' =>
                        [
                            'Laboratoire Arago, Universite Pierre et Marie Curie and CNRS, UMR 7628, B.P. 44, Avenue du Fontaule, F-66651 Banyuls/Mer-Cedex, France.',
                        ],
                    'ID' =>
                        [
                            '22',
                        ],
                ],

                [
                    'TY' =>
                        [
                            'JOUR',
                        ],
                    'AU' =>
                        [
                            'Johns, J.C.',
                            'Somero, G.N.',
                        ],
                    'PY' =>
                        [
                            '2004',
                        ],
                    'TI' =>
                        [
                            'Evolutionary Convergence in Adaptation of Proteins to Temperature: A4-Lactate Dehydrogenases of Pacific Damselfishes (Chromis spp.)',
                        ],
                    'SP' =>
                        [
                            '314-320',
                        ],
                    'JF' =>
                        [
                            'Molecular Biology and Evolution',
                        ],
                    'VL' =>
                        [
                            '21',
                        ],
                    'IS' =>
                        [
                            '2',
                        ],
                    'N1' =>
                        [
                            'AANAT T°C',
                            'pdf',
                        ],
                    'N2' =>
                        [
                            'We have compared the kinetic properties (Michaelis-Menten constant [Km] and catalytic rate constant [kcat]) and amino acid sequences of orthologs of lactate dehydrogenase-A (A4-LDH) from congeners of Pacific damselfishes (genus Chromis) native to cold-temperate and tropical habitats to elucidate mechanisms of enzymatic adaptation to temperature. Specifically, we determined whether the sites of adaptive variation and the types of amino acids involved in substitutions at these sites were similar in the Chromis orthologs and other orthologs of warm-adapted and cold-adapted A4-LDH previously studied. We report striking evolutionary convergence in temperature adaptation of this protein and present further support for the hypothesis that enzyme adaptation to temperature involves subtle amino acid changes at a few sites that affect the mobility of the portions of the enzyme that are involved in rate-determining catalytic conformational changes. We tested the predicted effects of differences in sequence using site-directed mutagenesis. A single amino acid substitution in a key hinge region of the A4-LDH molecule is sufficient to change the kinetic characteristics of a temperate A4-LDH to that of a tropical ortholog. This substitution is at the same location that was identified in previous studies of adaptive variation in A4-LDH and was hypothesized to be important in adjusting Km and kcat. Our results suggest that certain sites within an enzyme, notably those that establish the energy changes associated with rate-limiting movements of protein structure during catalysis, are "hot spots" of adaptation and that common types of amino acid substitutions occur at these sites to adapt structural "flexibility" and kinetic properties. Thus, despite the wide array of options that proteins have to adjust their structural stabilities in the face of thermal stress, the adaptive changes that couple "flexibility" to alterations of function may be limited in their diversity. Key Words: temperature adaptation • A4-LDH • enzyme kinetics • ldh-a gene • ortholog evolution • Chromis',
                        ],
                    'AD' =>
                        [
                            'Hopkins Marine Station, Stanford University, Pacific Grove, California 1 E-mail: somero@stanford.edu.',
                        ],
                    'ID' =>
                        [
                            '112',
                        ],
                ],

                [
                    'TY' =>
                        [
                            'JOUR',
                        ],
                    'AU' =>
                        [
                            'Kawauchi, H.',
                            'Sower, S.A.',
                        ],
                    'PY' =>
                        [
                            '2006',
                        ],
                    'TI' =>
                        [
                            'The dawn and evolution of hormones in the adenohypophysis',
                        ],
                    'SP' =>
                        [
                            '3-14',
                        ],
                    'JF' =>
                        [
                            'Gen Comp Endocrinol',
                        ],
                    'VL' =>
                        [
                            '148',
                        ],
                    'IS' =>
                        [
                            '1',
                        ],
                    'Y2' =>
                        [
                            'Aug',
                        ],
                    'N1' =>
                        [
                            '16356498',
                            'Rev Hormones',
                            'pdf',
                        ],
                    'KW' =>
                        [
                            'Animals *Evolution, Molecular Models, Biological Petromyzon/*genetics Phylogeny Pituitary Gland/secretion Pituitary Gland, Anterior/*secretion Pituitary Hormones/metabolism Pituitary Hormones, Anterior/*genetics',
                        ],
                    'N2' =>
                        [
                            'The adenohypophysial hormones have been believed to have evolved from several ancestral genes by duplication followed by evolutionary divergence. To understand the origin and evolution of the endocrine systems in vertebrates, we have characterized adenohypophysial hormones in an agnathan, the sea lamprey Petromyzon marinus. In gnathostomes, adrenocorticotropin (ACTH) and melanotropin (MSH) together with beta-endorphins (beta-END) are encoded in a single gene, designated as proopiomelanocortin (POMC), however in sea lamprey, ACTH and MSH are encoded in two distinct genes, proopoicortin (POC) gene and proopiomelanotropin (POM) gene, respectively. The POC and POM genes are expressed specifically in the rostral pars distalis (RPD) and the pars intermedia (PI), respectively. Consequently, the final products from both tissues are the same in all vertebrates, i.e., ACTH from the PD and MSH from the PI. The POMC gene might have been established in the early stages of invertebrate evolution by internal gene duplication of the MSH domains. The ancestral gene might be then inherited in lobe-finned fish and tetrapods, while internal duplication and deletion of MSH domains as well as duplication of whole POMC gene took place in lamprey and gnathostome fish. Sea lamprey growth hormone (GH) is expressed in the cells of the dorsal half of the proximal pars distalis (PPD) and stimulates the expression of an insulin-like growth factor (IGF) gene in the liver as in other vertebrates. Its gene consists of 5 exons and 4 introns spanning 13.6 kb, which is the largest gene among known GH genes. GH appears to be the only member of the GH family in the sea lamprey, which suggests that GH is the ancestral hormone of the GH family that originated first in the molecular evolution of the GH family in vertebrates and later, probably during the early evolution of gnathostomes. The other member of the gene family, PRL and SL, appeared by gene duplication. A beta-chain cDNA belonging to the gonadotropin (GTH) and thyrotropin (TSH) family was cloned. It is expressed in cells of the ventral half of PPD. Since the expression of this gene is stimulated by lamprey gonadotropin-releasing hormone, it was assigned to be a GTHbeta. This GTHbeta is far removed from beta-subunits of LH, FSH, and TSH in an unrooted tree derived from phylogenetic analysis, and takes a position as an out group, suggesting that lampreys have a single GTH gene, which duplicated after the agnathans and prior to the evolution of gnathostomes to give rise to LH and FSH.',
                        ],
                    'AD' =>
                        [
                            'Laboratory of Molecular Endocrinology, School of Fisheries Sciences, Kitasato University, Sanriku, Iwate 022-0101, Japan. hiroshi@kitasato-u.ac.jp',
                        ],
                    'ID' =>
                        [
                            '106',
                        ],
                ],

                [
                    'TY' =>
                        [
                            'JOUR',
                        ],
                    'AU' =>
                        [
                            'Klein, D.C.',
                        ],
                    'PY' =>
                        [
                            '2007',
                        ],
                    'TI' =>
                        [
                            'Arylalkylamine N-Acetyltransferase: "the Timezyme"',
                        ],
                    'SP' =>
                        [
                            '4233-4237',
                        ],
                    'JF' =>
                        [
                            'J Biol Chem',
                        ],
                    'VL' =>
                        [
                            '282',
                        ],
                    'IS' =>
                        [
                            '7',
                        ],
                    'N1' =>
                        [
                            'AANAT',
                            'pdf',
                        ],
                    'N2' =>
                        [
                            'Arylalkylamine N-acetyltransferase controls daily changes in melatonin production by the pineal gland and thereby plays a unique role in biological timing in vertebrates. Arylalkylamine N-acetyltransferase is also expressed in the retina, where it may play other roles in addition to signaling, including neurotransmission and detoxification. Large changes in activity reflect cyclic 3\',5\'-adenosine monophosphate-dependent phosphorylation of arylalkylamine N-acetyltransferase, leading to formation of a regulatory complex with 14-3-3 proteins. This activates the enzyme and prevents proteosomal proteolysis. The conserved features of regulatory systems that control arylalkylamine N-acetyltransferase are a circadian clock and environmental lighting.',
                        ],
                    'ID' =>
                        [
                            '114',
                        ],
                ],

                [
                    'TY' =>
                        [
                            'JOUR',
                        ],
                    'AU' =>
                        [
                            'Klein, D.C.',
                            'Coon, S.L.',
                            'Roseboom, P.H.',
                            'Weller, J.L.',
                            'Bernard, M.',
                            'Gastel, J.A.',
                            'Zatz, M.',
                            'Iuvone, P.M.',
                            'Rodriguez, I.R.',
                            'Begay, V.',
                            'Falcon, J.',
                            'Cahill, G.M.',
                            'Cassone, V.M.',
                            'Baler, R.',
                        ],
                    'PY' =>
                        [
                            '1997',
                        ],
                    'TI' =>
                        [
                            'The melatonin rhythm-generating enzyme: molecular regulation of serotonin N-acetyltransferase in the pineal gland',
                        ],
                    'SP' =>
                        [
                            '307-57; discussion 357-8',
                        ],
                    'JF' =>
                        [
                            'Recent Progress Hormone Research',
                        ],
                    'VL' =>
                        [
                            '52',
                        ],
                    'N1' =>
                        [
                            '9238858',
                            'Mel age',
                            'Abs',
                        ],
                    'KW' =>
                        [
                            'Amino Acid Sequence Animals Arylamine N-Acetyltransferase/chemistry/genetics/*metabolism Base Sequence Evolution Humans Melatonin/*blood Molecular Sequence Data Pineal Gland/*enzymology RNA, Messenger/metabolism Species Specificity',
                        ],
                    'N2' =>
                        [
                            'A remarkably constant feature of vertebrate physiology is a daily rhythm of melatonin in the circulation, which serves as the hormonal signal of the daily light/dark cycle: melatonin levels are always elevated at night. The biochemical basis of this hormonal rhythm is one of the enzymes involved in melatonin synthesis in the pineal gland-the melatonin rhythm-generating enzyme-serotonin N-acetyltransferase (arylalkylamine N-acetyltransferase, AA-NAT, E.C. 2.3.1.87). In all vertebrates, enzyme activity is high at night. This reflects the influences of internal circadian clocks and of light. The dynamics of this enzyme are remarkable. The magnitude of the nocturnal increase in enzyme activity ranges from 7- to 150-fold on a species-to-species basis among vertebrates. In all cases the nocturnal levels of AA-NAT activity decrease very rapidly following exposure to light. A major advance in the study of the molecular basis of these changes was the cloning of cDNA encoding the enzyme. This has resulted in rapid progress in our understanding of the biology and structure of AA-NAT and how it is regulated. Several constant features of this enzyme have become apparent, including structural features, tissue distribution, and a close association of enzyme activity and protein. However, some remarkable differences among species in the molecular mechanisms involved in regulating the enzyme have been discovered. In sheep, AA-NAT mRNA levels show relatively little change over a 24-hour period and changes in AA-NAT activity are primarily regulated at the protein level. In the rat, AA-NAT is also regulated at a protein level; however, in addition, AA-NAT mRNA levels exhibit a 150-fold rhythm, which reflects cyclic AMP-dependent regulation of expression of the AA-NAT gene. In the chicken, cyclic AMP acts primarily at the protein level and a rhythm in AA-NAT mRNA is driven by a noncyclic AMP-dependent mechanism linked to the clock within the pineal gland. Finally, in the trout, AA-NAT mRNA levels show little change and activity is regulated by light acting directly on the pineal gland. The variety of mechanisms that have evolved among vertebrates to achieve the same goal-a rhythm in melatonin-underlines the important role melatonin plays as the hormonal signal of environmental lighting in vertebrates.',
                        ],
                    'AD' =>
                        [
                            'Section on Neuroendocrinology, National Institute of Child Health and Human Development, National Institutes of Health, Bethesda, Maryland 20892-4480, USA.',
                        ],
                    'UR' =>
                        [
                            'http://www.ncbi.nlm.nih.gov/entrez/query.fcgi?cmd=Retrieve&db=PubMed&dopt=Citation&list_uids=9238858',
                        ],
                    'ID' =>
                        [
                            '21',
                        ],
                ],

                [
                    'TY' =>
                        [
                            'JOUR',
                        ],
                    'AU' =>
                        [
                            'Lemaire, C.',
                            'Allegrucci, G.',
                            'Naciri, M.',
                            'Bahri-Sfar, L.',
                            'Kara, H.',
                            'Bonhomme, F.',
                        ],
                    'PY' =>
                        [
                            '2000',
                        ],
                    'TI' =>
                        [
                            'Do discrepancies between microsatellite and allozyme variation reveal differential selection between sea and lagoon in the sea bass (Dicentrarchus labrax)?',
                        ],
                    'SP' =>
                        [
                            '457-467',
                        ],
                    'JF' =>
                        [
                            'Molecular Ecology',
                        ],
                    'VL' =>
                        [
                            '9',
                        ],
                    'IS' =>
                        [
                            '4',
                        ],
                    'N1' =>
                        [
                            'labrax Genet',
                            'pdf',
                        ],
                    'N2' =>
                        [
                            'In the present study the genetic structure of Dicentrarchus labrax (14 samples from the Mediterranean) was analysed at six microsatellite loci, in order to test the hypothesis that some enzymatic loci undergo selection between marine and lagoon habitat. Eight of the 14 samples were analysed at both microsatellite and allozyme markers. The analysis of the genetic variation among the Mediterranean samples showed that (i) &Fcirc;ST values obtained with the six microsatellite loci were much smaller than those obtained with the 28 allozymes and (ii) microsatellite loci seemed to reflect more the geographical proximity than an ecological one. Thirteen enzymatic loci exhibited moderate to high values compared with microsatellites. This was interpreted as evidence that these allozymes are non-neutral. However, only six loci seemed to be implicated in differentiation between marine and lagoon samples, the causes of selection being unknown for the others. A possible scenario of population dynamics of the sea bass between marine and lagoon habitat is suggested',
                        ],
                    'ID' =>
                        [
                            '124',
                        ],
                ],

                [
                    'TY' =>
                        [
                            'JOUR',
                        ],
                    'AU' =>
                        [
                            'Magne Olufsenn, M.',
                            'Smalås, A.O.',
                            'Moe, E.',
                            'Brandsdal, B.O.',
                        ],
                    'PY' =>
                        [
                            '2005',
                        ],
                    'TI' =>
                        [
                            'Increased Flexibility as a Strategy for Cold Adaptation A comparative Molecular Dynamics Study of Cold- and Warm-active Uracil DNA Glycosylase',
                        ],
                    'SP' =>
                        [
                            '18042-18048',
                        ],
                    'JF' =>
                        [
                            'J Biol Chem',
                        ],
                    'VL' =>
                        [
                            '280',
                        ],
                    'IS' =>
                        [
                            '18',
                        ],
                    'N1' =>
                        [
                            'AANAT T°C',
                            'pdf',
                        ],
                    'N2' =>
                        [
                            'From the Norwegian Structural Biology Centre, University of Tromsø, N-9037 Tromsø, Norway Uracil DNA glycosylase (UDG) is a DNA repair enzyme in the base excision repair pathway and removes uracil from the DNA strand. Atlantic cod UDG (cUDG), which is a cold-adapted enzyme, has been found to be up to 10 times more catalytically active in the temperature range 15-37 °C as compared with the warm-active human counterpart. The increased catalytic activity of cold-adapted enzymes as compared with their mesophilic homologues are partly believed to be caused by an increase in the structural flexibility. However, no direct experimental evidence supports the proposal of increased flexibility of cold-adapted enzymes. We have used molecular dynamics simulations to gain insight into the structural flexibility of UDG. The results from these simulations show that an important loop involved in DNA recognition (the Leu272 loop) is the most flexible part of the cUDG structure and that the human counterpart has much lower flexibility in the Leu272 loop. The flexibility in this loop correlates well with the experimental kcat/Km values. Thus, the data presented here add strong support to the idea that flexibility plays a central role in adaptation to cold environments.',
                        ],
                    'ID' =>
                        [
                            '111',
                        ],
                ],

                [
                    'TY' =>
                        [
                            'JOUR',
                        ],
                    'AU' =>
                        [
                            'Myers, B.R.',
                            'Sigal, Y.M.',
                            'Julius, D.',
                        ],
                    'PY' =>
                        [
                            '2009',
                        ],
                    'TI' =>
                        [
                            'Evolution of Thermal Response Properties in a Cold-Activated TRP Channel',
                        ],
                    'SP' =>
                        [
                            'e5741',
                        ],
                    'JF' =>
                        [
                            'PLoS ONE',
                        ],
                    'VL' =>
                        [
                            '4',
                        ],
                    'IS' =>
                        [
                            '5',
                        ],
                    'N1' =>
                        [
                            'AANAT Temp',
                            'pdf',
                        ],
                    'N2' =>
                        [
                            'Animals sense changes in ambient temperature irrespective of whether core body temperature is internally maintained (homeotherms) or subject to environmental variation (poikilotherms). Here we show that a cold-sensitive ion channel, TRPM8, displays dramatically different thermal activation ranges in frogs versus mammals or birds, consistent with variations in these species\' cutaneous and core body temperatures. Thus, somatosensory receptors are not static through evolution, but show functional diversity reflecting the characteristics of an organism\'s ecological niche.',
                        ],
                    'ID' =>
                        [
                            '209',
                        ],
                ],

                [
                    'TY' =>
                        [
                            'JOUR',
                        ],
                    'AU' =>
                        [
                            'Naciri, M.',
                            'Lemaire, C.',
                            'Borsa, P.',
                            'Bonhomme, F.',
                        ],
                    'PY' =>
                        [
                            '1999',
                        ],
                    'TI' =>
                        [
                            'Genetic study of the Atlantic/Mediterranean transition in sea bass (Dicentrarchus labrax)',
                        ],
                    'SP' =>
                        [
                            '591-596',
                        ],
                    'JF' =>
                        [
                            'Journal of Heredity',
                        ],
                    'VL' =>
                        [
                            '90',
                        ],
                    'IS' =>
                        [
                            '6',
                        ],
                    'N1' =>
                        [
                            'labrax Genet',
                            'pdf',
                        ],
                    'N2' =>
                        [
                            'We report on the genetic differentiation among populations of the common (or European) sea bass (Dicentrarchus labrax) from the North Sea, Britanny, Portugal, Morocco, the Alboran Sea, and the western Mediterranean. Based on allele-frequency variation at six microsatellite loci, a distance free inferred from Reynold\'s coancestry coefficient showed that sea bass populations clustered into two distinct groups of populations, an Atlantic group which includes the Alboran Sea east of Gibraltar Strait, and a western Mediterranean group. While no clear geographical pattern emerged within each of these two entities, the sharp transition led us to postulate that the divide may correspond to the Almeria-Oran oceanographic front. This divide was evidenced by a small but highly significant F<INF>ST</INF> (0.018, P<.001), corresponding at equilibrium to an average effective number of migrants Nm on the order of 14 individuals per generation. We emphasize the idea that the passive retention of larvae on either side of the oceanographic front is not a sufficient explanation for the persistence of this divide.',
                        ],
                    'ID' =>
                        [
                            '131',
                        ],
                ],

                [
                    'TY' =>
                        [
                            'JOUR',
                        ],
                    'AU' =>
                        [
                            'Nebel, C.',
                            'Romestand, B.',
                            'Nègre-Sadargues, G.',
                            'Grousset, E.',
                            'Aujoulat, F.',
                            'Bacal, J.',
                            'Bonhomme, F.',
                            'Charmantier, G.',
                        ],
                    'PY' =>
                        [
                            '2005',
                        ],
                    'TI' =>
                        [
                            'Differential freshwater adaptation in juvenile sea-bass Dicentrarchus labrax: involvement of gills and urinary system',
                        ],
                    'JF' =>
                        [
                            'Journal of Experimental Biology',
                        ],
                    'N1' =>
                        [
                            'labrax salt',
                            'pdf',
                        ],
                    'KW' =>
                        [
                            'teleost, osmoregulation, gills, kidney, Na+/K+-ATPase, sea-bass, Dicentrarchus labrax',
                        ],
                    'N2' =>
                        [
                            'The effects of long-term freshwater acclimatization were investigated in juvenile sea-bass Dicentrarchus labrax to determine whether all sea-bass juveniles are able to live in freshwater and to investigate the physiological basis of a successful adaptation to freshwater. This study particularly focused on the ability of sea-bass to maintain their hydromineral balance in freshwater and on their ion (re)absorbing abilities through the gills and kidneys. Two different responses were recorded after a long-term freshwater acclimatization. (1) Successfully adapted sea-bass displayed standard behavior; their blood osmolality was maintained almost constant after the freshwater challenge, attesting to their efficient hyperosmoregulation. Their branchial and renal Na+/K+-ATPase abundance and activity were high compared to seawater fish due to a high number of branchial ionocytes and to the involvement of the urinary system in active ion reabsorption, producing hypotonic urine. (2) Sea-bass that had not successfully adapted to freshwater were recognized by abnormal schooling behavior. Their blood osmolality was low (30% lower than in the successfully adapted sea-bass), which is a sign of acute osmoregulatory failure. High branchial Na+/K+-ATPase abundance and activity compared to successfully adapted fish were coupled to a proliferation of gill chloride cells, whose ultrastructure did not display pathological signs. The large surface used by the gill chloride cells might negatively interfere with respiratory gas exchanges. In their urinary system, enzyme abundance and activity were low, in accordance with the observed lower density of the kidney tubules. Urine was isotonic to blood in unsuccessfully adapted fish, ruling out any participation of the kidney in hyperosmoregulation. The kidney failure seems to generate a compensatory ion absorption through increased gill activity, but net ion loss through urine seems higher than ion absorption by the gills, leading to lower hyper-osmoregulatory performance and to death',
                        ],
                    'ID' =>
                        [
                            '126',
                        ],
                ],

                [
                    'TY' =>
                        [
                            'JOUR',
                        ],
                    'AU' =>
                        [
                            'Nozue, K.',
                            'Covington, M.F.',
                            'Duek, P.D.',
                            'Lorrain, S.',
                            'Fankhauser, C.',
                            'Harmer, S.L.',
                            'Maloof, J.N.',
                        ],
                    'PY' =>
                        [
                            '2007',
                        ],
                    'TI' =>
                        [
                            'Rhythmic growth explained by coincidence between internal and external cues',
                        ],
                    'SP' =>
                        [
                            '358-361',
                        ],
                    'JF' =>
                        [
                            'Nature',
                        ],
                    'VL' =>
                        [
                            '448',
                        ],
                    'N1' =>
                        [
                            'Rhythm',
                            'pdf',
                        ],
                    'N2' =>
                        [
                            'Most organisms use circadian oscillators to coordinate physiological and developmental processes such as growth with predictable daily environmental changes like sunrise and sunset. The importance of such coordination is highlighted by studies showing that circadian dysfunction causes reduced fitness in bacteria1 and plants2, as well as sleep and psychological disorders in humans3. Plant cell growth requires energy and water—factors that oscillate owing to diurnal environmental changes. Indeed, two important factors controlling stem growth are the internal circadian oscillator4, 5, 6 and external light levels7. However, most circadian studies have been performed in constant conditions, precluding mechanistic study of interactions between the clock and diurnal variation in the environment. Studies of stem elongation in diurnal conditions have revealed complex growth patterns, but no mechanism has been described8, 9, 10. Here we show that the growth phase of Arabidopsis seedlings in diurnal light conditions is shifted 8–12 h relative to plants in continuous light, and we describe a mechanism underlying this environmental response. We find that the clock regulates transcript levels of two basic helix–loop–helix genes, phytochrome-interacting factor 4 (PIF4) and PIF5, whereas light regulates their protein abundance. These genes function as positive growth regulators; the coincidence of high transcript levels (by the clock) and protein accumulation (in the dark) allows them to promote plant growth at the end of the night. Thus, these two genes integrate clock and light signalling, and their coordinated regulation explains the observed diurnal growth rhythms. This interaction may serve as a paradigm for understanding how endogenous and environmental signals cooperate to control other processes',
                        ],
                    'ID' =>
                        [
                            '208',
                        ],
                ],

                [
                    'TY' =>
                        [
                            'JOUR',
                        ],
                    'AU' =>
                        [
                            'Olufsen, M.',
                            'Smalås, A.O.',
                            'E., M.',
                            'Brandsdal, B.J.',
                        ],
                    'PY' =>
                        [
                            '2005',
                        ],
                    'TI' =>
                        [
                            'Increased Flexibility as a Strategy for Cold Adaptation. A comparative Molecular Dynamics Study of Cold and Warm-active Uracil DNA Glycosylase',
                        ],
                    'SP' =>
                        [
                            '18042-18048',
                        ],
                    'JF' =>
                        [
                            'The journal of Biological Chemistry',
                        ],
                    'VL' =>
                        [
                            '280',
                        ],
                    'IS' =>
                        [
                            '18',
                        ],
                    'N1' =>
                        [
                            'AANAT Temp',
                            'pdf',
                        ],
                    'N2' =>
                        [
                            'Uracil DNA glycosylase (UDG) is a DNA repair enzyme in the base excision repair pathway and removes uracil from the DNA strand. Atlantic cod UDG (cUDG), which is a cold-adapted enzyme, has been found to be up to 10 times more catalytically active in the temperature range 15-37 °C as compared with the warm-active human counterpart. The increased catalytic activity of cold-adapted enzymes as compared with their mesophilic homologues are partly believed to be caused by an increase in the structural flexibility. However, no direct experimental evidence supports the proposal of increased flexibility of cold-adapted enzymes. We have used molecular dynamics simulations to gain insight into the structural flexibility of UDG. The results from these simulations show that an important loop involved in DNA recognition (the Leu272 loop) is the most flexible part of the cUDG structure and that the human counterpart has much lower flexibility in the Leu272 loop. The flexibility in this loop correlates well with the experimental kcat/Km values. Thus, the data presented here add strong support to the idea that flexibility plays a central role in adaptation to cold environments.',
                        ],
                    'ID' =>
                        [
                            '202',
                        ],
                ],

                [
                    'TY' =>
                        [
                            'JOUR',
                        ],
                    'AU' =>
                        [
                            'Ortlund, E.A.',
                            'Bridgham, J.T.',
                            'Redinbo, M.R.',
                            'Thornton, J.W.',
                        ],
                    'PY' =>
                        [
                            '2007',
                        ],
                    'TI' =>
                        [
                            'Crystal Structure of an Ancient Protein: Evolution by Conformational Epistasis',
                        ],
                    'SP' =>
                        [
                            '1544 - 1548',
                        ],
                    'JF' =>
                        [
                            'Science',
                        ],
                    'VL' =>
                        [
                            '317',
                        ],
                    'IS' =>
                        [
                            '5844',
                        ],
                    'N1' =>
                        [
                            'AANAT evol',
                            'pdf',
                        ],
                    'N2' =>
                        [
                            'The structural mechanisms by which proteins have evolved new functions are known only indirectly. We report x-ray crystal structures of a resurrected ancestral protein—the ~450 million-year-old precursor of vertebrate glucocorticoid (GR) and mineralocorticoid (MR) receptors. Using structural, phylogenetic, and functional analysis, we identify the specific set of historical mutations that recapitulate the evolution of GR\'s hormone specificity from an MR-like ancestor. These substitutions repositioned crucial residues to create new receptor-ligand and intraprotein contacts. Strong epistatic interactions occur because one substitution changes the conformational position of another site. "Permissive" mutations—substitutions of no immediate consequence, which stabilize specific elements of the protein and allow it to tolerate subsequent function-switching changes—played a major role in determining GR\'s evolutionary trajectory',
                        ],
                    'ID' =>
                        [
                            '203',
                        ],
                ],

                [
                    'TY' =>
                        [
                            'JOUR',
                        ],
                    'AU' =>
                        [
                            'Pörtner, H.O.',
                            'Peck, M.A.',
                        ],
                    'PY' =>
                        [
                            '2010',
                        ],
                    'TI' =>
                        [
                            'Climate change effects on fishes and fisheries: towards a cause-and-effect understanding.',
                        ],
                    'JF' =>
                        [
                            'Journal of Fish Biology',
                        ],
                    'VL' =>
                        [
                            'no. doi: 10.1111/j.1095-8649.2010.02783',
                        ],
                    'N1' =>
                        [
                            'Fish T°C',
                            'pdf',
                        ],
                    'N2' =>
                        [
                            'Ongoing climate change is predicted to affect individual organisms during all life stages, thereby affecting populations of a species, communities and the functioning of ecosystems. These effects of climate change can be direct, through changing water temperatures and associated phenologies, the lengths and frequency of hypoxia events, through ongoing ocean acidification trends or through shifts in hydrodynamics and in sea level. In some cases, climate interactions with a species will also, or mostly, be indirect and mediated through direct effects on key prey species which change the composition and dynamic coupling of food webs. Thus, the implications of climate change for marine fish populations can be seen to result from phenomena at four interlinked levels of biological organization: (1) organismal-level physiological changes will occur in response to changing environmental variables such as temperature, dissolved oxygen and ocean carbon dioxide levels. An integrated view of relevant effects, adaptation processes and tolerance limits is provided by the concept of oxygen and capacity-limited thermal tolerance (OCLT). (2) Individual-level behavioural changes may occur such as the avoidance of unfavourable conditions and, if possible, movement into suitable areas. (3) Population-level changes may be observed via changes in the balance between rates of mortality, growth and reproduction. This includes changes in the retention or dispersion of early life stages by ocean currents, which lead to the establishment of new populations in new areas or abandonment of traditional habitats. (4) Ecosystem-level changes in productivity and food web interactions will result from differing physiological responses by organisms at different levels of the food web. The shifts in biogeography and warming-induced biodiversity will affect species productivity and may, thus, explain changes in fisheries economies. This paper tries to establish links between various levels of biological organization by means of addressing the effective physiological principles at the cellular, tissue and whole organism levels.',
                        ],
                    'ID' =>
                        [
                            '215',
                        ],
                ],

                [
                    'TY' =>
                        [
                            'JOUR',
                        ],
                    'AU' =>
                        [
                            'Ravi, V.',
                            'Venkatesh, B.',
                        ],
                    'PY' =>
                        [
                            '2008',
                        ],
                    'TI' =>
                        [
                            'Rapidly evolving fish genomes and teleost diversity',
                        ],
                    'SP' =>
                        [
                            '544-50',
                        ],
                    'JF' =>
                        [
                            'Current Opinion in Genetics & Development',
                        ],
                    'VL' =>
                        [
                            '18',
                        ],
                    'IS' =>
                        [
                            '6',
                        ],
                    'Y2' =>
                        [
                            'Dec',
                        ],
                    'N1' =>
                        [
                            '19095434',
                            'Phylogeny',
                            'pdf',
                        ],
                    'KW' =>
                        [
                            'Animals *Biodiversity Conserved Sequence/genetics DNA, Intergenic/genetics *Evolution, Molecular Fishes/*genetics Genes, Duplicate/*genetics Genome/*genetics Models, Genetic Phylogeny',
                        ],
                    'N2' =>
                        [
                            'Teleost fishes are the largest and most diverse group of vertebrates. The diversity of teleosts has been attributed to a whole-genome duplication (WGD) event in the ray-finned fish lineage. Recent comparative genomic studies have revealed that teleost genomes have experienced frequent gene-linkage disruptions compared to other vertebrates, and that protein-coding sequences in teleosts are evolving faster than in mammals, irrespective of their duplication status. A significant number of conserved noncoding elements (CNEs) shared between cartilaginous fishes and tetrapods have diverged beyond recognition in teleost fishes. The divergence of CNEs seems to have been initiated in basal ray-finned fishes before the WGD. The fast evolving singleton and duplicated genes as well as the divergent CNEs might have contributed to the diversity of teleost fishes.',
                        ],
                    'AD' =>
                        [
                            'Institute of Molecular and Cell Biology, Agency for Science, Technology and Research, Biopolis, Singapore, Singapore.',
                        ],
                    'UR' =>
                        [
                            'http://www.ncbi.nlm.nih.gov/entrez/query.fcgi?cmd=Retrieve&db=PubMed&dopt=Citation&list_uids=19095434',
                        ],
                    'ID' =>
                        [
                            '201',
                        ],
                ],

                [
                    'TY' =>
                        [
                            'JOUR',
                        ],
                    'AU' =>
                        [
                            'Santini, F.',
                            'Harmon, L.J.',
                            'Carnevale, G.',
                            'Alfaro, M.E.',
                        ],
                    'PY' =>
                        [
                            '2009',
                        ],
                    'TI' =>
                        [
                            'Did genome duplication drive the origin of teleosts? A comparative study of diversification in ray-finned fishes',
                        ],
                    'SP' =>
                        [
                            '194',
                        ],
                    'JF' =>
                        [
                            'BMC Evolutionary Biology',
                        ],
                    'VL' =>
                        [
                            '9',
                        ],
                    'N1' =>
                        [
                            '19664233',
                            'Phylogeny',
                            'pdf',
                        ],
                    'KW' =>
                        [
                            'Animals *Evolution *Gene Duplication *Genome Phylogeny Skates (Fish)/*genetics',
                        ],
                    'N2' =>
                        [
                            'BACKGROUND: One of the main explanations for the stunning diversity of teleost fishes (approximately 29,000 species, nearly half of all vertebrates) is that a fish-specific whole-genome duplication event (FSGD) in the ancestor to teleosts triggered their subsequent radiation. However, one critical assumption of this hypothesis, that diversification rates in teleosts increased soon after the acquisition of a duplicated genome, has never been tested. RESULTS: Here we show that one of three major diversification rate shifts within ray-finned fishes occurred at the base of the teleost radiation, as predicted by the FSGD hypothesis. We also find evidence for two rate increases that are much younger than the inferred age of the FSGD: one in the common ancestor of most ostariophysan fishes, and a second one in the common ancestor of percomorphs. The biodiversity contained within these two clades accounts for more than 88% of living fish species. CONCLUSION: Teleosts diversified explosively in their early history and this burst of diversification may have been caused by genome duplication. However, the FSGD itself may be responsible for a little over 10% of living teleost biodiversity. ~88% of species diversity is derived from two relatively recent radiations of freshwater and marine fishes where genome duplication is not suspected. Genome duplications are a common event on the tree of life and have been implicated in the diversification of major clades like flowering plants, vertebrates, and gnathostomes. However our results suggest that the causes of diversification in large clades are likely to be complex and not easily ascribed to a single event, even a dramatic one such as a whole genome duplication.',
                        ],
                    'AD' =>
                        [
                            'Department of Ecology and Evolutionary Biology, University of California at Los Angeles, 651 Charles Young Dr, South, Los Angeles, CA 90095, USA. michaelalfaro@ucla.edu.',
                        ],
                    'UR' =>
                        [
                            'http://www.ncbi.nlm.nih.gov/entrez/query.fcgi?cmd=Retrieve&db=PubMed&dopt=Citation&list_uids=19664233',
                        ],
                    'ID' =>
                        [
                            '200',
                        ],
                ],

                [
                    'TY' =>
                        [
                            'JOUR',
                        ],
                    'AU' =>
                        [
                            'Sauzet, S.',
                            'Besseau, L.',
                            'Herrera Perez, P.',
                            'Coves, D.',
                            'Chatain, B.',
                            'Peyric, E.',
                            'Boeuf, G.',
                            'Munoz-Cueto, J.A.',
                            'Falcon, J.',
                        ],
                    'PY' =>
                        [
                            '2008',
                        ],
                    'TI' =>
                        [
                            'Cloning and retinal expression of melatonin receptors in the European sea bass, Dicentrarchus labrax',
                        ],
                    'SP' =>
                        [
                            '186-95',
                        ],
                    'JF' =>
                        [
                            'General and Comparative Endocrinology',
                        ],
                    'VL' =>
                        [
                            '157',
                        ],
                    'IS' =>
                        [
                            '2',
                        ],
                    'Y2' =>
                        [
                            'Jun',
                        ],
                    'N1' =>
                        [
                            '18555069',
                            'Mel receptors',
                            'pdf',
                        ],
                    'KW' =>
                        [
                            'Amino Acid Sequence Animals Bass/*genetics Cloning, Molecular Fish Proteins/*genetics *Gene Expression Profiling In Situ Hybridization Molecular Sequence Data Receptor, Melatonin, MT1/genetics Receptor, Melatonin, MT2/genetics Receptors, Melatonin/*genetics Retina/*metabolism Sequence Homology, Amino Acid',
                        ],
                    'N2' =>
                        [
                            'Melatonin contributes to synchronizing behaviors and physiological functions to daily and seasonal rhythm in fish. However, no coherent vision emerges because the effects vary with the species, sex, age, moment of the year or sexual cycle. And, scarce information is available concerning the melatonin receptors, which is crucial to our understanding of the role melatonin plays. We report here the full length cloning of three different melatonin receptor subtypes in the sea bass Dicentrarchus labrax, belonging, respectively, to the MT1, MT2 and Mel1c subtypes. MT1, the most abundantly expressed, was detected in the central nervous system, retina, and gills. MT2 was detected in the pituitary gland, blood cells and, to a lesser extend, in the optic tectum, diencephalon, liver and retina. Mel1c was mainly expressed in the skin; traces were found in the retina. The cellular sites of MT1 and MT2 expressions were investigated by in situ hybridization in the retina of pigmented and albino fish. The strongest signals were obtained with the MT1 riboprobes. Expression was seen in cells also known to express the enzymes of the melatonin biosynthesis, i.e., in the photoreceptor, inner nuclear and ganglion cell layers. MT1 receptor mRNAs were also abundant in the retinal pigment epithelium. The results are consistent with the idea that melatonin is an autocrine (neural retina) and paracrine (retinal pigment epithelium) regulator of retinal function. The molecular tools provided here will be of valuable interest to further investigate the targets and role of melatonin in nervous and peripheral tissues of fish.',
                        ],
                    'AD' =>
                        [
                            'Universite Pierre et Marie Curie-Paris6, UMR7628, Laboratoire Arago, Avenue Fontaule, BP44, F-66651 Banyuls-sur-Mer, Cedex, France.',
                        ],
                    'UR' =>
                        [
                            'http://www.ncbi.nlm.nih.gov/entrez/query.fcgi?cmd=Retrieve&db=PubMed&dopt=Citation&list_uids=18555069',
                        ],
                    'ID' =>
                        [
                            '212',
                        ],
                ],

                [
                    'TY' =>
                        [
                            'JOUR',
                        ],
                    'AU' =>
                        [
                            'Sower, S.A.',
                            'Freamat, M.',
                            'Kavanaugh, S.I.',
                        ],
                    'PY' =>
                        [
                            '2009',
                        ],
                    'TI' =>
                        [
                            'The origins of the vertebrate hypothalamic–pituitary–gonadal (HPG) and hypothalamic–pituitary–thyroid (HPT) endocrine systems: New insights from lampreys',
                        ],
                    'SP' =>
                        [
                            '20-29',
                        ],
                    'JF' =>
                        [
                            'General and Comparative Endocrinology',
                        ],
                    'VL' =>
                        [
                            '161',
                        ],
                    'IS' =>
                        [
                            '1',
                        ],
                    'N1' =>
                        [
                            'Endocr Evol',
                            'pdf',
                        ],
                    'N2' =>
                        [
                            'The acquisition of a hypothalamic–pituitary axis was a seminal event in vertebrate evolution leading to the neuroendocrine control of many complex functions including growth, reproduction, osmoregulation, stress and metabolism. Lampreys as basal vertebrates are the earliest evolved vertebrates for which there are demonstrated functional roles for two gonadotropin-releasing hormones (GnRHs) that act via the hypothalamic–pituitary–gonadal axis controlling reproductive processes. With the availability of the lamprey genome, we have identified a novel GnRH form (lamprey GnRH-II) and a novel glycoprotein hormone receptor, lGpH-R II (thyroid-stimulating hormone-like receptor). Based on functional studies, in situ hybridization and phylogenetic analysis, we hypothesize that the newly identified lamprey GnRH-II is an ancestral GnRH to the vertebrate GnRHs. This finding opens a new understanding of the GnRH family and can help to delineate the evolution of the complex neuro/endocrine axis of reproduction. A second glycoprotein hormone receptor (lGpH-R II) was also identified in the sea lamprey. The existing data suggest the existence of a primitive, overlapping yet functional HPG and HPT endocrine systems in this organism, involving one possibly two pituitary glycoprotein hormones and two glycoprotein hormone receptors  as opposed to three or four glycoprotein hormones interacting specifically with three receptors in gnathostomes. We hypothesize that the glycoprotein hormone/glycoprotein hormone receptor  systems emerged as a link between the neuro-hormonal and peripheral control levels during the early stages of gnathostome divergence. The significance of the results obtained by analysis of the HPG/T axes in sea lamprey  may transcend the limited scope of the corresponding physiological compartments by providing important clues in respect to the interplay between genome-wide events (duplications), coding sequence (mutation) and expression control level evolutionary mechanisms in definition of the chemical control pathways in vertebrates.',
                        ],
                    'ID' =>
                        [
                            '210',
                        ],
                ],

                [
                    'TY' =>
                        [
                            'JOUR',
                        ],
                    'AU' =>
                        [
                            'Wang, T.',
                            'Overgaard, J.',
                        ],
                    'PY' =>
                        [
                            '2007',
                        ],
                    'TI' =>
                        [
                            'The Heartbreak of Adapting to Global Warming',
                        ],
                    'SP' =>
                        [
                            '49-50',
                        ],
                    'JF' =>
                        [
                            'Science',
                        ],
                    'VL' =>
                        [
                            '315',
                        ],
                    'IS' =>
                        [
                            '5808',
                        ],
                    'N1' =>
                        [
                            'AANAT Temp',
                            'pdf',
                        ],
                    'ID' =>
                        [
                            '199',
                        ],
                ],

                [
                    'TY' =>
                        [
                            'JOUR',
                        ],
                    'AU' =>
                        [
                            'Wilkinson, C.W.',
                        ],
                    'PY' =>
                        [
                            '2006',
                        ],
                    'TI' =>
                        [
                            'Roles of acetylation and other post-translational modifications in melanocortin function and interactions with endorphins',
                        ],
                    'SP' =>
                        [
                            '453-71',
                        ],
                    'JF' =>
                        [
                            'Peptides',
                        ],
                    'VL' =>
                        [
                            '27',
                        ],
                    'IS' =>
                        [
                            '2',
                        ],
                    'Y2' =>
                        [
                            'Feb',
                        ],
                    'N1' =>
                        [
                            '16280185',
                            'Rev Hormones',
                            'pdf',
                        ],
                    'KW' =>
                        [
                            'Acetylation Animals Endorphins/*metabolism Neurotransmitter Agents/physiology Pro-Opiomelanocortin/metabolism/*physiology *Protein Processing, Post-Translational Rats alpha-MSH/*metabolism',
                        ],
                    'N2' =>
                        [
                            'Phylogenetic, developmental, anatomic, and stimulus-specific variations in post-translational processing of POMC are well established. For melanocortins, the role of alpha-N-acetylation and the selective activities of alpha, beta, and gamma forms are of special interest. Acetylation may shift the predominant activity of POMC products between endorphinergic and melanocortinergic actions-which are often in opposition. This review addresses: (1) variations in POMC processing; (2) the influence of acetylation on the functional activity of alpha-MSH; (3) state- and stimulus-dependent effects on the proportional distribution of forms of melanocortins and endorphins; (4) divergent effects of alpha-MSH and beta-endorphin administration; (5) potential roles of beta- and gamma-MSH.',
                        ],
                    'AD' =>
                        [
                            'Geriatric Research, Education and Clinical Center, VA Puget Sound Health Care System, Seattle, WA 98108, USA. wilkinso@u.washington.edu',
                        ],
                    'ID' =>
                        [
                            '107',
                        ],
                ],

                [
                    'TY' =>
                        [
                            'JOUR',
                        ],
                    'AU' =>
                        [
                            'Zilberman-Peled, B.',
                            'Benhar, I.',
                            'Coon, S.L.',
                            'Ron, B.',
                            'Gothilf, Y.',
                        ],
                    'PY' =>
                        [
                            '2004',
                        ],
                    'TI' =>
                        [
                            'Duality of serotonin-N-acetyltransferase in the gilthead seabream (Sparus aurata): molecular cloning and characterization of recombinant enzymes',
                        ],
                    'SP' =>
                        [
                            '139-147',
                        ],
                    'JF' =>
                        [
                            'General and Comparative Endocrinology',
                        ],
                    'VL' =>
                        [
                            '138',
                        ],
                    'IS' =>
                        [
                            '2',
                        ],
                    'N1' =>
                        [
                            'AANAT',
                            'pdf',
                        ],
                    'KW' =>
                        [
                            'Melatonin; Serotonin; Indoleethylamine; Arylalkylamine-N-acetyltransferase; Pineal gland; Retina; Seabream',
                        ],
                    'N2' =>
                        [
                            'Serotonin-N-acetyltransferase (arylalkylamine-N-acetyltransferase, AANAT) is the key enzyme in the biosynthesis of melatonin in the pineal gland and retinal photoreceptors. Rhythmic AANAT activity drives rhythmic melatonin production in these tissues. The presence of two AANATs, AANAT1 and AANAT2, has been previously demonstrated in three fresh water teleosts. This duality, the result of early gene duplication, is unique to teleost species. In this study, the cDNAs encoding for AANAT1 and AANAT2 were cloned from a marine fish, the gilthead seabream (sb, Sparus aurata). Northern blot hybridization analysis indicates that sbAANAT1 and sbAANAT2 are exclusively expressed in the retina and pineal gland, respectively. Bacterially expressed recombinant sbAANATs exhibit differential enzyme kinetics. Recombinant retinal sbAANAT1 has relatively high substrate affinity and low activity rate; it is inhibited by high substrate and product concentrations. In contrast, recombinant pineal sbAANAT2 exhibits low substrate affinity and high activity rate and is not inhibited by substrates or products. The two recombinant enzymes also exhibit differential substrate preference. Retinal sbAANAT1 acetylates a range of arylalkylamines while pineal sbAANAT2 preferentially acetylates indoleethylamines, especially serotonin. The different spatial expression patterns, enzyme kinetics, and substrate preferences of the two sbAANATs support the hypothesis that, as a consequence of gene duplication, teleosts have acquired two AANATs with different functions. Pineal AANAT2 specializes in the production of large amounts of melatonin that is released into the circulation and exerts an endocrine role. Retinal AANAT1, on the other hand, is involved in producing low levels of melatonin that execute a paracrine function. In addition, retinal AANAT1 may carry out an as yet unknown function that involves acetylation of arylalkylamines other than serotonin.',
                        ],
                    'ID' =>
                        [
                            '115',
                        ],
                ],

                [
                    'TY' =>
                        [
                            'JOUR',
                        ],
                    'AU' =>
                        [
                            'Ziv, L.',
                            'Gothilf, Y.',
                        ],
                    'PY' =>
                        [
                            '2006',
                        ],
                    'TI' =>
                        [
                            'Circadian time-keeping during early stages of development',
                        ],
                    'SP' =>
                        [
                            '4146-51',
                        ],
                    'JF' =>
                        [
                            'Proc Natl Acad Sci U S A',
                        ],
                    'VL' =>
                        [
                            '103',
                        ],
                    'IS' =>
                        [
                            '11',
                        ],
                    'Y2' =>
                        [
                            'Mar 14',
                        ],
                    'N1' =>
                        [
                            'Clock Devel',
                            'pdf',
                        ],
                    'KW' =>
                        [
                            'Animals Arylalkylamine N-Acetyltransferase/genetics Base Sequence Circadian Rhythm/*physiology/radiation effects Eye Proteins/antagonists & inhibitors/genetics Gene Expression Regulation, Developmental/radiation effects Larva/physiology/radiation effects Light Oligonucleotides, Antisense/genetics Period Circadian Proteins Pineal Gland/embryology/growth & development/physiology/radiation effects RNA, Messenger/genetics/metabolism Zebrafish/*embryology/genetics/growth & development/physiology Zebrafish Proteins/antagonists & inhibitors/genetics',
                        ],
                    'N2' =>
                        [
                            'The zebrafish pineal gland is a photoreceptive organ containing an intrinsic central circadian oscillator, which drives daily rhythms of gene expression and the melatonin hormonal signal. Here we investigated the effect of light, given at early developmental stages before pineal gland formation, on the pineal circadian oscillator. Embryos that were exposed to light at 0-6, 10-13, or 10-16 h after fertilization exhibited clock-controlled rhythms of arylalkylamine-N-acetyltransferase (zfaanat2) mRNA in the pineal gland during the third and fourth day of development. This rhythm was absent in embryos that were placed in continuous dark within 2 h after fertilization (before blastula stage). Differences in the phases of these rhythms indicate that they are determined by the time of illumination. Light treatments at these stages also caused a transient increase in period2 mRNA levels, and the development of zfaanat2 mRNA rhythm was abolished by PERIOD2 knock-down. These results indicate that light exposure at early developmental stages, and light-induced expression of period2, are both required for setting the phase of the circadian clock. The 24-h rhythm is then maintained throughout rapid proliferation and, remarkably, differentiation.',
                        ],
                    'AD' =>
                        [
                            'Departments of Zoology and Neurobiochemistry, The George S. Wise Faculty of Life Sciences, Tel Aviv University, Tel Aviv 69978, Israel.',
                        ],
                    'UR' =>
                        [
                            'http://www.ncbi.nlm.nih.gov/entrez/query.fcgi?cmd=Retrieve&db=PubMed&dopt=Citation&list_uids=16537499',
                        ],
                    'ID' =>
                        [
                            '213',
                        ],
                ],
            ],
            $this->ris->getRecords()
        );
    }
}
