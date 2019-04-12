<?php

require_once __DIR__."/../../vendor/autoload.php";
require_once __DIR__."/main.php";

class MyTestCases extends \PHPUnit\Framework\TestCase
{
    public function testFixed() {
        $this->assertEquals(99890, solution('7316717653133062491922511967442657474235534919493496983520368542506326239578318016984801869478851843858615607891129494954595017379583319528532088055111254069874715852386305071569329096329522744304355766896648950445244523161731856403098711121722383113622298934233803081353362766142828064444866452387493035890729629049156044077239071381051585930796086670172427121883998797908792274921901699720888093776657273330010533678812202354218097512545405947522435258490771167055601360483958644670632441572215539753123457977846174064955149290862569321978468622482839722413756570560574902614079729686524145351004748216637048440319989000889524345065854122758866688116427171479924442928230863465674813919123162824586178664583591245665294765456828489128831426076900422421902267105562632111110937054421750694165896040807198403850962455444362981230987879927244284909188845801561660979191338754992005240636899125607176060588611646710940507754100225698315520005593572972571636269561882670428252483600823257540920752963450'));
        $this->assertEquals(98765, solution('1234567898765'));
        $this->assertEquals(99826, solution('46738727808941123846345330135632985455337851279719778261031823764869628433809425106611475972492037902412441311225772812696152320276893619472966799778287379298960827602211443015799826210591634241358234818057351677400441108970669535903431045501806068739933372437031061301149894395903747771223275149642571622579957903427765563888995110282869242528384357231552281663328816919537496338493065208108801734978042674007712763037560510673032718273474628076459701910260123472345253059169753712542459379397770028163932225794814104729824672221041771004913973038115713914439617276249117518822668435283672881285624768178010182710901721747248060900562926394758401803780131533886878323563250620035647593617964279566353923724376573575054392927566348921779822496645527874178610099521985870519477594775553315831638411100687290093650406469322678764403276881870411560454196826123282205874464904721766260885154728015201217380074383453938571663047873280579794096292315580840466125962370025066823932973940133699182539661684969171633098797691193572120475968879535639925914128273026063862627460468356798309320308755104103929969879105597510578260488243377905446635505578876541640284648092646082707208800769743033648773334899110603450045497526552287721419318366377148056072661087344534116870468855796472852800777306561232413425881322791436361861771609062066829709119501419954389902136241210311075277754819003967967752269596229513262831353285767241121235967072908134635088574322220483588774178453268516295974664027531976270418479131184174237600423596957521748853190018441586005077475878689580389394734489005304093185947297079891697797952353864786243582350034746763435074237134574364530349387243867068868683077264829456172834524912362475078849015562884086560350061328003649324792945608083531744888491029386100493230631579141880102682195833840250688308598163580990297418165358600628539065951320117426441560815180146707425859796067658622578809651364047602118199323365485605218502877284578182612425068221380299582805826332848790622075'));
        $this->assertEquals(99995, solution('6357598631281302291214866353258064453709947733633018150793868251656787596305519190499683250863913632350000051418619002841870592944574826820368389581060035800638520979907019386459894874483259000894218468539521995245616877444737361358363429142822010562258375130855848638550154215567822048413546885141673427190265563203862270870394503675899846016868670133847707806262842353645364567301297591872739487807775026144065532440310117345809664449599100485467418551117722518319343639758174786886059235541895861201777279436156346382741562551870515056207859142497370077796813814313034461251087287816616072721113356116896590533364364591582512921960438529609501674413329349602850664470267038309505661279198916164786048736291769533341854672603723503813653367758710649962511611680041216748653555432026934271276676077454594316866834233612711316312586535140813935289661103380076995569285674554598932805121063943426999448518045867378633381996757101221557683547822953013300757612264160306457284339351671134252945680128491248761522410907526169241754373601711166556435669141894703036651836494875883304753492043248591710767524974204747609365338323904659645280031534004244924116762228576465321683355111393345560703906617283731847712161139126287093688814846356254957346171391475079511282292022428523737353532832674948233288656026787080140259684374848623445533073835779046485699366086253908174443031478176398831652418285664403010452485663198237613505832816327186314788579688391347108562848872376616631588661113407028680020428740321783809325182879636261057455504120735086045517575659690326306112110011251268247699482969677029909451670000286607798277397680109785935980783401740532734337102005330246689998452604928535143474776667845709436596145325164610975600308010424015876232061755122343125121011307697400587777798439869047853567287527280837864399753125908353086084682367102592652850615674699725501262982065069553277116057520582682707811803096092365185375708610698543485988417889879161206089298715082445535746531883120585808217922712701332433793842641860623581556655451192137640291193963058175103435229994003010558268480065891201400029179316166668328787312640604459354758224585095430189328729095177902266325062567871709665847687418204349988042008239834066356855452987929018717451166061719878852405469626154611537477736734080285810441893824793354349444893300941979272081572001788261719325818059530561574517887520559375638985823747118041531136691917244833954314315148904611360691241727868608066290332464456188972389955459314622426079172469265421547157419163104858208311065530907313292075904402756021015652964955914718375187871392514632547274510725405277409978179966977667653842201771598730101614692504398870086115948640431114813143183962712666084718077866762709267754463323284578037172287354829408743067332125095725686336499158047208052585995364069043406466372136830901208106909323434379821883554026957693583304750409014055714364185610824188155520368449773367372435479424202855636756553511447876055772121840409600699144780678202388510514528489468511442259072285977309706223649487273191275850418375305559222299003613282595582336178464836808034811351819998139853507224130896970280941940176866858095308321223951854494976868697317653048455906582797713780628079471320081458190681823626970365068492250979268762673714972337475549694701527529982454605106862803562167336965247211088902121360639904617319132445696725627185755728321593762925609399511769475339044531008786724603909700639956511850697201148646886182674882590681634391027722596806322284072869691860833748052647290703083022936657722985141790461532859826965836862890759236395145448692285813368431154289949329361715507886138240213732706529027801025763169090367700232616289741580880468816941488785325051436737106516258884534670082925637555078107777311392975634803108206794508760894156741291814821307654343777288330023435465014068066089097145295442947033638313281124997930381816069805136489448370094533439001977811124426025937189410914505108208657746248732169369274106189019862669210220782663068384114284029622078703258477947963882483797320490116506580949296583801245888285367695913327409094804649014773478727361122524721570953937187778230773892884246701900675436708298015969781790102654357836206619493653736147339903076395916086586093630348960900033903592188466884530123304747355576470367827579600390942689786751222922610800768625463845744593357481136125594105581833897320163777410122638918385509411691605927469292131308594996904184291856871538776603867415123267072781433228337599594793554942044533673127810160910670768531455736548745412328703652567278464218989328676531237378020535098918255412089986496041478584197003063429057047551083465844187173707020061707069891024641452661929956606795892607048733107122129031758686758882910757848331547499897702203618619634323653469433122483618257780078171092935718477533479364701952824607495858548901221279721290858440002255832406478626603252124952347151278515362499664745510727311763118043865696877384237596889933437110979889326435830209456648759845174111800461326704085216324261648400117285026703114288564901483079315370591272031022022636293923424751444321404942745904255616257530725936827409642211830459831259633628933352483431412516730769626553288681498094915041280360390769819291709514664081687695783305007451908918149657104137386682130704689419405861915340889275126041758797063076680634571044944888008119921234134340544493486123759695697656683955575528909116246800454264068440191519753341910659276477244399268153964395795046730550442155018409384199484998296877692124318388473924350491390518317638090606973323646925338504636512637927807103607942136119351084858381364005039111816003950952606082351087905704714846313838199104526587312086979655700061305991642206909532567637459803599602840013760254245568540260769315039900169196227446930973355020219459250509705922263070794155296291110614628607757762843857147012109449419014853059936319196974103122725181370791251350625073983758331782855086946922982602669237505562880775024983339401861854811732811233649245160483769212742379763478747307713416123384875807280317052706265435764768007882744647131528581730336768845315800440400820305147025272278902344727685651381053390995273246292954610281062011747697647304030995180746440883755248294920747538715205160129963528534151341814757726720799518373175005045522879963066166552564070930057767714542203788417916467846653987350742716484875170157858795984271095513374954162338417177268565290517583377640072368355466714965504982366918993202484441143656008794752043306799527409516211820839168403007305299082204816521707842985650088289790550291508560391798900182385808303020427141427136846144735455810050975418504755281347930564166954597670217666045248943671980607690648917041320359412974754295642223747469439315317783395205628155747014104577731982813246821007393864340794126051532823377238587855990032505959221261037597468592034180861125157324022937421438635553206572135288575838771341928581015822594018620277400127646365119856733370575391299122806627834930362168445881611133255164085687492677269643990301489079559075820389499919884998837795231406017214539648195760875047609217055769133995412019223511296552715241571635231328702810079639808839121712527456911594261293965986721324215395617819276574368497005800810663797180848523261133741469546024144784186641898367809113898687037343193583672864005510727679101758656638111449083668268369107434666523345123450496422090058205819222239997073665687918123444545118969917283397734715884113949614193488916236430164257679822181693656995481719696217791185892774198739326156064757924870213282086703117922415803517242420626802584018440706873322587860633744228088741935476720670518474961616959568549302583819625883267122206718734970445789781704231835365843899243577857087847182801310078151917959161012178299708814963332302881738727499078770690865746263479042002592533665764230705524053866719864606085236215402480126266618195738747990982344914718639618130147315038771730940287843241049018414121754901968132393380803559874105432693386057324792873450768726562821682440208682127513373374152034593429421807314631933443173028792488034341477098194143768611339648162146292081789059989370596667233484789694317124394801008879690834783968878045878253042432403915724507866229862161918240697674087801807472174452717681430124614554926133992552730235754157871996746407234675103468971084200362016568421406582197306230431613941223015018014113150276799238015994560055927903251816919903029268464488945402100722139246759600283028863348502245735511617499247897093612615550493411379108514627298082293481751735430646277475865971338405972250465523127526441319483224581974612000680377236199251194236597292368237391876675602549110490184302982671355269030747689132039817310174367344436090109688854015708252238201720425603452659311837818306147051445262409125096335723191807679446355091292669431143133874047936878161285266911452184917987830204491092144989324100629337298213018817138230084890095140857253912585483466883171466070078412357294669540286319665118757657461052339273226819513711907795642267793312062467226105407122417641457302926999957312233362670795260751913286918676016413589856600654219961446668725490934613797970434045703490206435014852251697086942246251905177346690640741523619933107077850353334646291229536542327301050362437809975953162906770606788227066914973361266970744383203445884842566795986634567078231860960253034799256440932662858881683242506838092112472806476701802939906569022460357771192732823737900603891110433088034805028489066359231495272149479355926385893784096694197674195154597283760350569023383781283422768872600403450617245242084477118826819260698252632411298434081306960057709587556756316062174736508974772038840814835333372069359975325133759696176079134592603786696525618185464758211224952870280684656227807636310322188451552570978757199251256428290355643249487806152801892266170149655234269104477725845929628180218156441501463436050361724891731970719374644573902061050239644291721819333968572741561375374568629926'));
    }
}