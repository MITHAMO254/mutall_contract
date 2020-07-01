<!DOCTYPE html>
<?php
//
//Date of agreement
$date = "<u>2020/01/31</u>";
//
//Company name of the Mutall
$landlord_title = "<u>MUTALL INVESTMENT COMPANY LIMITED</u>";
$landlord_name = "MUTALL";
//
//Company name of the tenant
$client_title = "<u>THE DEEKOS BAKERS LIMITED</u>";
$client_name = "DEEKOS";
//
//The title no. of the premises.
$title = "<u>NGONG/NGONG/17140</u>";
//
//Ref name of the agreement.
$room_id = "05";
$room_name = "bakery";
$agreement_ref = "$client_name/$room_name/room_no:$room_id";
//
//legal authority.
$lawyer ="Waweru Munyi,"
        . "<br>Advocates,"
        . "<br>Kiserian <?php echo $landlord_name Building,"
        . "<br>1st Floor,Kiserian Town,"
        . "<br>P.o Box 365-00206.";
?>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>agreement</title>
        <link rel="stylesheet" href="style.css">
        <script src="main.js"></script>
    </head>
    <body >
        <header id="header" class="">
            <button id="myBtn" onclick="toggleNav()" style="display:none">SHOW NAVIGATION</button>
        </header><!-- /header -->
        <aside class="nav" id="myNav">
            <a 
               href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;
            </a>
            <a href="#s1">1.Rights of <?php echo $client_name; ?></a>
            <a href="#s2">2.Obligation of <?php echo $client_name; ?></a>
            <a href="#s3">3.Additional Obligation of <?php echo $client_name;?></a>
            <a href="#s4">4. Obligations of  <?php echo $landlord_name;?></a>
            <a href="#s5">5.Agreement and Declaration</a>
            <a href="#s6">6.Condition of the Agreement</a>
            <a href="#s7">7.Termination of the Agreement</a>
            <a href="#s8">8.<?php echo $client_name;?> Renewal Terms</a>
            <a href="#s9">9.Conditions of either <?php echo $client_name;?> and 
               <?php echo $landlord_name;?></a>
            <a href="#s10">10. Agreement</a>
            <a href="#s11">11</a>
            <a href="#s10">12</a>
        </aside>
        <div class="container" id="main" onclick="closeNav()">
            <section id="s1">
                <no>1. The Rights of the <?php echo $client_name?></no>
                <content>
                    <agreement>
                        <p>DATED <data><?php echo $date; ?></data></p>
                        <p><data><b><?php echo $landlord_title;?></b></data></p>
                        <p>TO</P>
                        <p><data><b><?php echo $client_title;?></data></p>
                        <p>LEASE<br>
                         OVER PREMISES SITUATED ON<br>
                         TITLE NO. <data><?php echo $title;?><br></data></b></p>
                        <p><data><?php echo $agreement_ref;?></data></p>
                        <p><b>Checked by:</b> 
                        <data style="color: blue"><br><?php echo $lawyer;?></data></p>
                    </agreement>
                    <b>IN THE MATTER OF THE LAND ACT NO.6 OF 2012<br>
                    IN THE MATTER OF THE LAND REGISTRATION ACT NO.3 OF 2012<br>
                    IN THE MATTER OF THE REGISTERED LAND ACT (CHAPTER 300)
                    (NOW REPEALED)
                    <br></b>
                    <p>LEASE<br>
                    <p>THIS LEASE is made the  day of  <u>2020-01-31</u><br></p>
                    BETWEEN
                    <p><data> 1. <b><?php echo $landlord_title;?></b></data> 
                    whose address for purposes hereof is care of <u>Post Office 
                    Box Number 374-00206</u> <u>Kiserian</u>, in the 
                    Republic of <u>Kenya</u>(hereinafter called  
                    <?php echo $landlord_name;?> which expression shall where the context 
                    so admits include its successors and assigns) of 
                    the one pair;</p>
                    <br>AND
                    <p><data> 2. <b><?php echo $client_title;?></b></data> 
                    a body corporate duly established under the Companies 
                    Act and licensed to carry on Bakery business under the 
                    whose address for purposes hereof is <u>Post 
                    Office Box Number 46231- 00100 Nairobi</u> in the said 
                    Republic (hereinafter called “<?php echo $client_name;?> which expression 
                    shall where the context so admits include its successors 
                    and assigns) of the other part.
                    </p>
                    <br>
                    <b>WHEREAS:-</b>
                    <p>
                    A)<?php echo $landlord_name;?> is registered as the proprietor of ALL 
                    THAT piece of land TITLE NO. 
                    <data><?php echo $title;?></data> 
                    together with all buildings and improvements erected and 
                    being thereon (hereinafter called the “land").
                    </p>
                    <p>
                    B)<?php echo $landlord_name;?> has  erected a building on the said 
                    piece or parcel of land (hereinafter called "the Building") 
                    which comprises inter alia offices, shops and the usual 
                    conveniences.<br>
                    That floor space comprising by measurement <u>4092</u> 
                    square feet or 
                    thereabout of  lettable space on the <u>ground floor</u> of the
                    Building.<br>
                    The Term of Five (5) years from <u>2020-03-01.</u><br>
                    
                    C)<?php echo $landlord_name;?> has agreed to grant a Lease of the 
                    premises forming a portion of the building more 
                    particularly as it described in 2.1 
                    (“hereinafter called "the Demised Premises to 
                    <?php echo $client_name;?> under the terms and conditions hereinafter 
                    mentioned.
                    <p>
                    <br><b>NOW THIS LEASE WITNESSETH</b> that
                    <p>
                    1.IN CONSIDERATION of the rent hereinafter reserved 
                    and of the covenants and agreements by <?php echo $client_name;?> 
                    hereinafter contained <?php echo $landlord_name;?> DOES HEREBY LEASE 
                    unto the <?php echo $client_name;?>.
                    <p>ALL THAT the Demised Premises TOGETHER 
                    WITH the right to <?php echo $client_name;?> and all persons
                    authorised by <?php echo $client_name;?> in common with 
                    <?php echo $landlord_name;?> and the other <?php echo $client_name?>
                    and occupiers (if any) of the Building and all persons duly 
                    authorised by them not otherwise lessees  to  use  the entrance  
                    halls and staircases, landings,passages for the purposes 
                    only of ingress to and egress from the Building during
                    the business hours hereinafter defined or as may from 
                    time to time be determined by <?php echo $landlord_name;?>. 
                    <p><b>PROVIDED THAT</b> if <?php echo $client_name;?> shall
                    give to <?php echo $landlord_name;?>  or  its agent  
                    reasonable notice  of such  <?php echo $client_name;?> desire  
                    <?php echo $landlord_name;?>  will  endeavor to make 
                    suitable arrangements for <?php echo $client_name;?>  and 
                    members of  <?php echo $client_name;?> staff  
                    to  obtain  access  to  the Demised Premises at such 
                    other times as <?php echo $client_name;?> may require. 
                    <b>AND TOGETHER ALSO</b> 
                    with the like right to use the lavatories and washing 
                    conveniences (not otherwise leased) in the Building as 
                    the same may be allocated by <?php echo $landlord_name;?>.
                    <p><b>AND TOGETHER ALSO</b> 
                    in common with all other persons  entitled thereto and
                    so far only as <?php echo $landlord_name;?> has power to  
                    grant the same, with the free passage and  running of water,soil 
                    and electricity from and to the Demised Premises through 
                    the drams, pipes,wires, cables and meters in  or under 
                    the adjoining or adjacent property. 
                    <p><b>BUT EXCEPTING AND RESERVING</b> unto   
                    <?php echo $landlord_name;?> and the person or persons for the 
                    time being occupying any other part or parts of the Building  
                    the free passage and running of the water,soil and electricity 
                    from the adjoining or adjacent property through the drains 
                    ,pipes, wires, cables and meters in or under the Demised Premises  
                    and the right of <?php echo $landlord_name;?> to enter  
                    the Demised Premises at all reasonable times by prior appointment
                    for the purpose  of inspection, altering, adding to or repairing 
                    the same <b>TO BE HELD</b> by <?php echo $client_name;?> as 
                    lessee for a Term more particularly described  in  this lease
                    (hereinafter called “the Term) <b>SUBJECT</b> nevertheless  
                    to determination as hereinafter provided <b>YIELDING AND</b>
                    therefore end thereout  during the Term the rent in the amount 
                    and in the manner section 2.1.
                </content>
                </section>
                <section id="s2">
                    <no>2. Obligation of <?php echo $client_name?></no>
                    <content>
                        <div>
                            <p>
                              <?php echo $client_name;?> to the intent that the obligations set out 
                              may continue throughout the continuance of the Term 
                              hereby created covenants and agrees with <?php echo $landlord_name;?> 
                              as follows:-
                            </p>
                        </div>
                            <span>
                                2.1 Rent Payment.
                            </span>
                        <specific style="color: blue">
                                <div style="list-style-type: none; padding-left: 30px;">
                                <table border="1">
                            <article>
                                2.1.1 To pay rent calculated at the rate of Kshs 60/=
                                per square foot translating to a total monthly rent of Kenya 
                                Shillings Kshs 245,520 (without VAT) which shall 
                                be as from 2020-01-31 as follows:-<br>
                            </article>
                            
                            <tr>
                            <td>Room identifier</td>
                            <td>Room Description</td>
                            <td>Area squar feet</td>
                            <td>Rent amount@ <u>sh60/ft</u><sup>2</sup></td>
                            </tr>
                            <tr>
                                <td>deekos_bakery</td>
                                <td>Main bakery floor</td>
                                <td><nm>3,145</nm></td>
                                <td><nm>23,520</nm></td>
                            </tr>
                            <tr>
                                <td>deekos_store</td>
                                <td>Room used as deekos store</td>
                                <td><nm>555</nm></td>
                                <td><nm>33,300</nm></td>
                            </tr>
                            <tr>
                                <td>cafeteria_extension</td>
                                <td>Room area outside the Cafeteria</td>
                                <td><nm>392</nm></td>
                                <td><nm>188,700</nm></td>
                            </tr>
                            <tr>
                                <td colspan="2">TOTAL</td>
                                <td><nm>4,092</nm></td>
                                <td><nm>245,520</nm></td>
                            </tr>
                    </table><br>
                    2.1.2-Rent shall be paid on a quarterly basis in advance not
                          later than the 5<sup>th</sup> of that month when it is due. If 
                          paid later than that date, it will attract a charge of 10% per
                          day up to a maximmum of one month thereafter to start 
                          recovery procedure of the same.<br>
                    2.1.3-Rent shall be increased at the rate of 10%
                          after every 2 years of the term. So in two year time 
                          the rent shall be:- sh 245,520+(10%of sh245,520) 
                          = sh 270,072.<br>
                    2.1.4-DEEKOS agrees to pay 2 times gross monthly rent as deposit which 
                          sum shall be held by <?php echo $landlord_name;?> to the credit
                          of <?php echo $client_name;?> account and applied as 
                          hereinafter provided this amount sh 491,040<br>
                    </div>
                </specific>
                <div id="s2_2">
                <span>
                    2.2 Water Consumption:
                </span>
                    <article>
                        To pay all charges in respect of water consumption.
                    </article>
                <specifics>
                    2 times  monthly water consumption in previous term as deposit 
                    which sum shall be held by <?php echo $landlord_name;?> to the 
                    credit of <?php echo $client_name;?>'s account and applied as 
                    hereinafter provided this amount to sh 20,000.<br>
                    <div style="list-style-type: none; padding-left: 30px;">
                    <br>2.2.1-Water charges shall be sh 300 per unit, to
                        be renewed atfer 2 years.<br> 
                    <br>2.2.2-You have been allocated the following water meters:-
                        <ol type="a">
                            <li>19115159 For bakery floor. </li>
                            <li>18031083 For borehole water feeding the 
                                toilets allocated to you.</li>
                        </ol>
                    </div>
                </specifics>
                        <span>
                            2.3 Electricity Consumption:
                        </span>
                        <article>
                        All electricity consumed in the Common Parts 
                        of the Building (Common Parts being those parts 
                        of the Building enjoyed or used by <?php echo $client_name;?> in 
                        common with others) including but not limited to 
                        the operation and maintenance charges incurred in 
                        respect of all electricity or manually operated 
                        lighting apparatus lifts and machinery therein.
                        </article>
                <specifics>
                        <div style="list-style-type: none; padding-left: 30px;">
                        2.3.1 You will pay bills directly to KPLC when due 
                        through A/C No. 48119382.<br>
                        2.3.2 Your electricity meter number is 61579934.<br>
                        2.3.3 Should KPLC threatens to cut their supply due to your
                        non-payment,we will use the deposity to offset the bill.<br>
                        2.3.4 DEEKOS will top up their deposit after such an eventuality.<br>
                        2.3.5 2 times the (shs 100,000) monthly electricity consumption 
                        in your last term that is sh 100,000*2 = sh 200,000.<br>
                        </div>
                </specifics>
                <span>
                    2.4 Security:
                </span>
                <article>
                    Maximmum security should be in place day and night to
                    ensure total security.
                </article>
                <specifics>
                    <div style="list-style-type: none; padding-left: 30px;">
                    2.4.1 (<?php echo $client_name;?>) is exempted from security chages as we understand you 
                    will provide your own day and night
                    security.<br>
                    </div>
                </specifics>
                <span>
                    2.5 Service charge.
                </span>
                <article>
                    To pay to <?php echo $landlord_name;?> by way of additional rent a Service 
                    Charge which is proportional to the operating expenses 
                    of the Building that the floor space of the Premises bears 
                    to the floor space of the lettable area of the Building 
                    such Service Charge lo be paid with the Rent monthly in 
                    advance and shall be in respect of the amount from time
                    to time expended by <?php echo $landlord_name;?>.<br>
                    <specifics>
                    The deekos shall pay Service Charge at the 
                    monthly rate of Kenya Shillings Kshs 5,000 payable quarterly
                    in advance together with the Rent.<br>
                    Service charge Levied:-Service charge shall be levied to cover
                    various outgoings and shall be reviewed bi-annually at the rate  
                    of 10% of the pre-existing amount.
                    </specifics>
                    
                    <li style="list-style-type: none;  line-height: 2em;">
                        2.5.1 The Gardener/Cleaner:-
                        <br>The services of such gardeners and cleaners 
                        as <?php echo $landlord_name;?> shall consider necessary for 
                        cleaning and keeping tidy the Common Parts of the
                        Building and the windows therein and the costs 
                        of the materials used by such cleaners.

                    <li style="list-style-type: none;">
                        2.5.2 Repairs and Mantenance:
                        <br>All repairs and maintenance not being of a 
                        structural nature.

                    <li style="list-style-type: none; line-height: 2em;">
                        2.5.3 Management Cost:
                        <br>The costs of managing the Building.

                    <li style="list-style-type: none;  line-height: 2em;">
                        2.5.4 Land upkeep cost:
                        <br>The costs for the upkeep of the Land.

                    <li style="list-style-type: none;  line-height: 2em;">
                        2.5.5 The operating costs:
                        The services and operating costs of such security 
                        staff as <?php echo $landlord_name; ?> shall consider necessary for 
                        the protection of the exterior of the Building.<br>
                        <?php echo $landlord_name;?> shall return the said 
                        sum to <?php echo $client_name;?> 
                        upon the expiration of the Term unless the same shall  
                        have been applied by <?php echo $landlord_name;?> 
                        to any of <?php echo $client_name;?> obligations 
                        under this Lease.<br>
                        The following provisions shall apply in respect of 
                        this Sub-Clause 2.5.6<br>

                    <li style="list-style-type: none; padding-left: 30px;  line-height: 2em;">
                            <br> 2.5.6.1 The computation:<br>
                            The amount of the operating expenses of the 
                            Building shall be computed annually for the period 
                            ending 30th day of June in each year.<br>
                            2.5.6.2 Payments:<br>
                            <?php echo $client_name;?> shall within Thirty (30)  
                            days after the date of written notification from  
                            <?php echo $landlord_name;?> or its agent pay  
                            <?php echo $landlord_name;?> the amount 
                            actually owing in respect of operating expenses as 
                            aforesaid in one lump sum in full settlement of the
                            amount of the Service Charge attributed to the Demised 
                            Premises in respect of the financial year concerned 
                            credit being given to <?php echo $client_name;?>   
                            for all the payments made in respect of the same by 
                            <?php echo $client_name;?> to the   
                            <?php echo $landlord_name;?>.<br>
                            2.5.6.3 Ascertainement of service Charge:<br>
                            The amount of the Service Charge shall be 
                            ascertained annually by reference to a certificate 
                            (hereinafter called the “Certificate) signed by or 
                            on behalf of the auditor engaged by  
                            <?php echo $landlord_name;?> as 
                            soon as may be practicable after the expiration of 
                            each Financial Year and which shall relate lo such 
                            Financial Year.<br>
                            2.5.6.4 Summary:<br>
                            The Certificate shall contain a fair summary 
                            of the Service Charge as costs and Expenditure 
                            during the Financial Year to which it relates.
                            2.5.6.5 Supply:<br>
                            A copy of the Certificate shall be supplied to the 
                            <? php echo "$client_name ?> as soon as practicable 
                            after it shall have been signed.<br>
                            2.5.6.6 The ten (10) days of demand:<br>
                            In the event that payments made by the and other 
                            DEEKOS and other<?php echo $client_name ?>
                            on account of Service Charge are less than the actual 
                             Service Charge expenses of  <?php echo $landlord_name;?>  
                            the <? php echo "$client_name ?> shall within 
                            ten (10) days of demand far such additional amount 
                            of Service Charge payments required make payment 
                            of the <? php echo "$client_name?>'s proportionate share of
                            such additional amount of Service Charge payments in such manner 
                            as <?php echo $landlord_name;?> shall require.
                            <br> 2.5.6.7 Reimbursement/Credit note:<br>
                            In the event that payments made by the <? php echo "$client_name ?>
                            and other<?php echo $client_name?> on account of Service Charge
                            are more than the actual Service Charge expenses of  
                            <?php echo $landlord_name;?>
                            <? php echo "$client_name ?> with the proportionate excess 
                            amount or give the <? php echo "$client_name?> a credit note for the 
                            proportionate excess Service Charge which shall 
                            be applied to the immediate Service Charge obligations 
                            of the <? php echo "$client_name?>.<br>
                            2.5.6.8 Termination:<br>
                            Paragraphs (vii) and (viii} shall survive the 
                            termination expiry  of this Lease until the Service 
                            Charge accounts between  <?php echo $landlord_name;?>
                            and <?php echo $client_name;?> are settled.
                    </li>
                </article>
                    </div>
                    <div id="s2-6">
                <span>
                    2.6 Additional Charges:
                </span>
                <article style="list-style-type: none; padding-left: 30px;">
                            2.6.1 Insurance policies cost;<br>
                            The costs of all insurance policies in 
                            respect of the Building;<br>
                            2.6.2 Assessement or imposement:<br> 
                            All rates land rent taxes and other charges 
                            of every nature and kind which now or may hereafter 
                            be assessed or imposed on the Demised Premises the 
                            Land or the Building by the Government or by any 
                            local or competent authority.
                </article>
                    </div>
                    <div id="s2_7">
                <span>
                    2.7 Deposits.
                </span>
                    <br>To deposit with <?php echo $landlord_name; ?> forthwith 
                    the sum described bellow.
                    <br>This amount shall be held by <?php echo $landlord_name; ?> 
                    to the credit of deekos account. 
                    </div>
                <specifics>
                    <div style="list-style-type: none; padding-left: 30px;">
                    <table border="1" >
                    <tr>
                        <td>Name</td>
                        <td>Monthly payment(Ksh.)</td>
                        <td>Deposit(Ksh.)</td>
                    </tr>
                    <tr>
                        <td>Rent</td>
                        <td><nm>245,520</nm></td>
                        <td><nm>491,040</nm></td>
                    </tr>
                    <tr>
                        <td>Water</td>
                        <td><nm>10,000</nm></td>
                        <td><nm>20,000</nm></td>
                    </tr>
                    <tr>
                        <td>Electricity</td>
                        <td><nm>100,000</nm></td>
                        <td><nm>200,000</nm></td>
                    </tr>
                    <tr>
                        <td>Service/Gardener</td>
                        <td><nm>5,000</nm></td>
                        <td><nm>10,000</nm></td>
                    </tr>
                    <tr>
                        <td colspan="1">TOTAL</td>
                        <td><nm>361,520</nm></td>
                        <td><nm>721,040</nm></td>
                    </tr>
                    </table>
                </div>
                </specifics>
                <div id="s2_8">
                <span>
                    2.8 VAT.
                </span>
                <article>
                    To pay and indemnify <?php echo $landlord_name; ?> against 
                    Value Added Tax or any tax of a similar nature which
                    may be substituted for it or levied in addition to 
                    it chargeable in respect of any payment made by 
                    <?php echo $client_name; ?> under any of terms of or in connection with this 
                    Lease or in respect of any payment made by <?php echo $landlord_name; ?> 
                    where <?php echo $client_name; ?> agrees in this Lease to reimburse  
                    <?php echo $landlord_name; ?> for such payment.
                </article>
            </div>
            <specifics>
                <div style="list-style-type: none; padding-left: 30px;">
                2.8.1 To pay 16% V.A.T on <u>rent</u> and <u>service charge</u> which shall be 
                passed over to the Kenya Revenue Authority calculated as 
                16% *(245,520 + 5,000) i.e sh 40,083.2
                </div>
            </specifics>
                    <div id="s2_9">
                        <span>
                            2.9 Biders(suppliers).
                        </span>
                        <article>
                            In the event of water being supplied separately to the 
                            Demised Premises to pay to <?php echo $landlord_name; ?> the cost of 
                            supplying and installing a meter AND to pay for all water 
                            so supplied to the   Demised Premises AND to indemnify  
                            <?php echo $landlord_name; ?> against all actions proceedings claims and demands 
                            arising from any leakage or overflow of water from the 
                            Demised Premises save where such overflow or leakage is 
                            for causes not attributable to <?php echo $client_name; ?> or any of its 
                            agents/employees/licensees. 
                        </article>
                    </div>
                    <div id="s2_10">
                        <span>
                            2.10 Possession Conditions.
                        </span>
                        <article>
                            To take immediate possession of the Demised Premises 
                            and continue having such possession and not to part with 
                            possession without the written consent of  <?php echo $landlord_name; ?>. 
                            If <?php echo $client_name; ?> shall for any reason vacate the Demised 
                            Premises without the written consent of <?php echo $landlord_name; ?> or 
                            stop carrying on the business the Demised Premises were 
                            demised for then it shall become lawful for  <?php echo $landlord_name; ?> 
                            to retake possession of the Demised Premises and the 
                            lease hereby granted shall thereby be determined 
                            AND PROVIDED ALWAYS that in the event of vacating the 
                            Demised Premises with  <?php echo $landlord_name; ?>'s consent as aforesaid 
                            <?php echo $client_name; ?> shall provide such caretaking and security 
                            arrangements as  <?php echo $landlord_name; ?> and/or its insurers shall 
                            require up to such date and time as <?php echo $client_name; ?> shall 
                            vacate the premises which time and date shall have been 
                            notified to  <?php echo $landlord_name; ?>.
                        </article>
                        </div>
                    <div id="s2_11">
                        <span>
                            2.11 Misuse.
                        </span>
                        <article>
                            Not to do or carry on any business or any service which 
                            may render abnormal or increase the consumption of water 
                            or electric power without the prior written consent of  
                            <?php echo $landlord_name; ?> who shall be entitled as a condition of giving such 
                            consent to demand such additional service charge  or rent 
                            as may suffice to cover the additional charges for water and 
                            power caused by such use.
                        </article>
                    </div>
                    <div id="s2_12">
                        <span>
                            2.12 Maintenance.
                        </span>
                        <article>
                            To keep the Demised Premises in good and substantial 
                            <? php echo "$client_name ?>able repair and condition to thereasonable 
                            satisfaction of  <?php echo $landlord_name; ?> and also to permit  
                            <?php echo $landlord_name; ?> or its agents with or without workmen and 
                            others at all reasonable times during all reasonable 
                            working hours to enter into and upon the Demised Premises 
                            with prior notice to <?php echo $client_name; ?> for the purpose of 
                            painting, repairing or otherwise dealing with the outside 
                            door or doors entering into the Demised Premises and 
                            the outside of all window frames in the Demised Premises;
                             <?php echo $landlord_name; ?> causing as little inconvenience as necessary 
                            and maxing good any damage occasioned thereby.
                        </article>
                        </div>
                    <div id="s2_13">
                        <span>
                            2.13 Obstruction.
                        </span>
                        <article>
                            Not to obstruct nor permit or suffer its servants, agents 
                            or licensees to obstruct in any manner the corridors, 
                            passage and staircase in the Building and not to place 
                            nor deposit anything in nor obstruct nor suffer anything 
                            to be placed or deposited or any obstruction made in the 
                            means of access to the Demised Premises or any forecourt 
                            area, yard or fire escape and not to cover up or obstruct 
                            nor suffer to be covered up or obstructed any glass windows 
                            in any manner whatsoever.
                        </article>
                        </div>
                    <div id="s2_14">
                        <span>
                            2.14 Commencement of the term.
                        </span>
                        <article>
                            In the last year of the Term or  upon the Sooner  
                            determination of the lease well and sufficiently to 
                            clean off if necessary and subject to the proviso 
                            hereinafter contained paint with two coats of plastic 
                            emulsion oil or other best paint and in such manner and 
                            style and of such color or occurs as  <?php echo $landlord_name; ?> may 
                            reasonably determine all the inside parts of the Demised 
                            Premises previously painted and to clean off and polish 
                            all polished wood(if any) in a proper and workmanlike 
                            manner and to the reasonable satisfaction of  <?php echo $landlord_name; ?> 
                            PROVIDED ALWAYS that nothing herein contained shall 
                            require <?php echo $client_name; ?> to put or keep the Demised Premises 
                            in any better state or condition of decoration than 
                            they were at the commencement of the Term.
                        </article>
                        </div>
                    <div id="s2_15">
                        <span>
                            2.15 <?php echo $client_name; ?> Responsibilty.
                        </span>
                        <article>
                            Not to introduce nor permit to be introduced into the 
                            Demised Premises or any part thereof any package, 
                            article or furniture,piece of machinery or other 
                            equipment or thing whatsoever having a weight which 
                            may strain or damage the Building or the Demised Premises
                            unless and until lie individual weight of each such thing 
                            (and in the case of business machines and mechanical 
                            equipment also the s ling thereof with a view to the 
                            absorption and prevention of vibration noise arid annoyance)
                            shall have first been approved in writing by  <?php echo $landlord_name; ?>'s 
                            Architect for the time being AND ALSO NOT to install on the 
                            Demised Premises nor permit lo be installed therein any 
                            safe nor alter the position of any such safe without first 
                            obtaining the consent of  <?php echo $landlord_name; ?>'s said Architect 
                            to the placing of a safe of the size and weight and in the 
                            position intended AND ALSO NOT lo load the floors beyond 
                            the margin of safety prescribed by  <?php echo $landlord_name; ?>’s said 
                            Architect or if no margin of safety is prescribed beyond 
                            a proper margin of safety (which it shall be the sole 
                            responsibility of <?php echo $client_name; ?> to ascertain) AND ALSO to 
                            indemnify'  <?php echo $landlord_name; ?> against all actions, claims 
                            and demands arising from any breach of this sub-clause 
                            or resulting from the maximum floor stress of the 
                            demises premises being at any time exceeded.
                        </article>
                        <specifics>
                            <div style="list-style-type: none; padding-left: 30px;">
                                2.15.1 Toilets:-
                                <br>-You have been assigned the toilets
                                    on ground floor for your exclussive use.<br>
                                    -They should be maintained in a clean state 
                                     failure to which the management will revert back to MUTALL.<br>
                                    -If they are not clean always,we will recover them.<br>
                                2.15.2 Industrial waste management:-
                                    <br>-Drainage system for your industrial waste to
                                     be maintained in a clean state.<br>
                                    -To empty the underground fementation tank 
                                     when it is full.<br>
                                2.15.3 At cost:
                                    <br>-If  <?php echo $landlord_name; ?> does the 
                                    cleaning or empty on your behalf,we will charge
                                    <? php echo "$client_name ?> the cost plus 
                                    15% service charge.
                            </div>
                        </specifics>
                    </div>
                    <div id="s2_16">
                        <span>
                            2.16 Permission for Inspection.
                        </span>
                        <article>
                            To permit any agent employed by  <?php echo $landlord_name; ?> or  
                            <?php echo $landlord_name; ?> to enter the Demised Premises for purposes 
                            of inspecting the same and in the ordinary course of 
                            his duty in the company of a member of <?php echo $client_name; ?> 
                            staff (excepting only in Ihe case of emergency ).
                        </article>
                    </div>
                    <div id="s2_17">
                        <span>
                            2.17 Examining Premise Condition.
                        </span>
                        <article>
                            To permit  <?php echo $landlord_name; ?> and its agents and all other 
                            persons authorised by it with or without workmen and 
                            others and with all necessary toots, appliances and 
                            apparatus at any time with prior notice lo enter upon 
                            the Demised Premises accompanied as aforesaid 
                            (or without notice and forcibly in case of emergency) 
                            for the purpose of examining the condition thereof or of 
                            doing such  repairs , alterations additions improvements 
                            renewals as may pursuant to the covenant and agreement by 
                             <?php echo $landlord_name; ?> in that behalf hereinafter contained  
                            <?php echo $landlord_name; ?> causing as little inconvenience as necessary and 
                            making good any damage occasioned thereby PROVIDED HOWEVER 
                            that the rent hereby reserved snail not in any way be abated 
                            while such repairs, alterations, additions, improvements, 
                            renewals as aforesaid are being done nor shall  <?php echo $landlord_name; ?> 
                            be liable to  <?php echo $client_name; ?> in any way for loss or interruption 
                            of business of  <?php echo $client_name; ?> arising therefrom or otherwise 
                            howsoever.
                        </article>
                        </div>
                    <div id="s2_18">
                        <span>
                            2.18 <?php echo $client_name; ?> Liability.
                        </span>
                        <article>
                            Before the expiration of Twenty-one (21) days’ notice 
                            given by  <?php echo $landlord_name; ?> to carry out any repairs for which 
                             <?php echo $client_name; ?> is liable under  <?php echo $client_name; ?> covenants and 
                            agreements herein contained; to carry out the same in 
                            accordance with such notice and to the satisfaction of 
                             <?php echo $landlord_name; ?> PROVIDED THAT if  <?php echo $client_name; ?> shall fail to 
                            carry out such work within such time as aforesaid then 
                            <?php echo $landlord_name; ?> may thereupon cause the same to be done and 
                            recover the cost thereof from   <?php echo $client_name; ?>  but  without 
                            prejudice to   <?php echo $landlord_name; ?>s right to re -entry  hereinafter 
                            contained.
                        </article>
                    </div>
                    <div id="s2_19">
                        <span>
                            2.19 Making by the Consent of  <?php echo $landlord_name; ?>.
                        </span>
                        <article>
                            Not to make without the previous molten consent of  
                            <?php echo $landlord_name; ?>, first had and obtained (which consent shall 
                            not be unreasonably withheld) structural alterations, 
                            partitions or structural additions in or to the Demised 
                            Premises or to  <?php echo $landlord_name; ?>s  fixtures. If  <?php echo $landlord_name; ?> 
                            shall grant its consent then the following provisions 
                            shall apply:-
                            <list>
                            <li>
                               (i)All drawings and specifications in respect of 
                               such alterations partitions or additions shall first 
                               be approved by  <?php echo $landlord_name; ?> or its agent.
                            <li>
                               (ii) <?php echo $client_name; ?> shall at its own cost and expense 
                               obtain the approval of an appropriate Government 
                               and Local Authorities;
                            <li>
                               (iii)Any such alterations partitions additions 
                                installations or improvements shall be removed by 
                                <?php echo $client_name; ?> and  <?php echo $client_name; ?> shall reinstate the 
                                Demised Premises to then original condition at 
                                 <?php echo $client_name; ?> own  expense and cost prior to the 
                                expiration or sooner determination o' this lease  
                                PROVIDED ALWAYS that any improvements undertaken 
                                by  <?php echo $client_name; ?> which are of a permanent nature shall 
                                be forfeited to  <?php echo $landlord_name; ?> al the expiry or sooner 
                                determination of this lease upon such terms as  
                                <?php echo $landlord_name; ?> and <?php echo $client_name; ?> may agree.
                            </list>
                        </article>
                    </div>
                    <div id="s2_20">
                        <span>
                            2.20 <?php echo $landlord_name; ?> Payment.
                        </span>
                        <article>
                            To pay all costs, changes, expenses (including Advocates' 
                            costs aid Surveyor's fees) incurred by  <?php echo $landlord_name; ?> for 
                            the purpose of or incidental to the preparation and service 
                            of any notice requiring the <?php echo $client_name; ?> to remedy a breach 
                            of any of the covenants herein curtained or incident 
                            to the preparation and service schedule of dilapidation 
                            at the termination of the Term .
                        </article>
                    </div>
                    <div id="s2_21">
                        <span>
                            2.21 Insurance.
                        </span>
                        <article>
                            To maintain in force throughout the Term insurance 
                            against damage of all plate glass in the Demised 
                            Premises and to produce to the Landing on demand the 
                            policy of such insurance end evidence of payment of 
                            the current premium. It is also  <?php echo $client_name; ?>  resposibility 
                            to insure its equipment, fittings and fixtures against 
                            fire  theft and other perils.
                        </article>
                        </div>
                    <div id="s2_22">
                        <span>
                            2.22 Condition for Insurance.
                        </span>
                        <article>
                            Not to do nor permit  or suffer to be done anything 
                            whereby any insurance of the Building against loss 
                            or damage by fire may become void or voidable or where 
                            the rate of premium for any such insurance may be 
                            increased AND to repay to <?php echo $landlord_name; ?> all sums paid 
                            by way of increased premium and all expenses incurred 
                            by it in or about the .renewal of any such policy 
                            rendered necessary by a broach of It is covenant and 
                            agreement and to the intent that  such payments shall 
                            be payable on the  day fixed tor the payment of the 
                            rent hereinbefore reserved next after demand therefor 
                            shall have been made to  <?php echo $client_name; ?> and shall be recoverable 
                            as rent in the event of any insurance moneys 
                            being withheld or wholly or partially recoverable by 
                            reasons of any breach or non-observance of this present 
                            covenant to indemnity  <?php echo $landlord_name; ?> in respect of of 
                            the cost or a proportionate part thereof of rebuilding 
                            or reinstating the same.
                        </article>
                    </div>
                    <div id="s2_23">
                        <span>
                            2.23 Insurance effected.
                        </span>
                        <article>
                            In the event of the Building or the Demised Premises 
                            or of the said fixtures and fittings of any part or 
                            parts thereof respectively or any part thereof or of 
                            the electrical equipment therein or any part thereof 
                            being damaged or destroyed by fire any time during 
                            the term and the insurance money under any insurance 
                            against fire effected thereon by <?php echo $landlord_name; ?> being 
                            wholly or partially irrecoverable by reason solely on 
                            the part of any act or default of  <?php echo $client_name; ?>  or  
                            <?php echo $client_name; ?> servants, employees, agents, licensees or 
                            visitors then and in every such case forthwith 
                            {in addition to the sad rent) to pay to <?php echo $landlord_name; ?> 
                            the whole or (as the case may require) a fair proportion 
                            of the costs of completely re-building and reinstating 
                            the same; any disputes as to the proportion to be so 
                            contributed by  <?php echo $client_name; ?> or otherwise in respect of 
                            or arising out of this provision to be referred to 
                            arbitration in accordance with the provisions of the 
                            Arbitration Ad 1995 or any Act or Acts amending or 
                            replacing the same.
                        </article>
                        </div>
                    <div id="s2_24">
                        <span>
                            2.24 Subleting.
                        </span>
                        <article>
                            Not to transfer sublet or part with or share the 
                            possession of the Demised Premises or any part thereof 
                            without the prior written consent of <?php echo $landlord_name; ?> AND 
                            IT IS HEREBY EXPRESSLY AGREED AND DECLARED by and 
                            between the parties that upon any breach by  <?php echo $client_name; ?> 
                            of this covenant and agreement if shall be lawful for 
                            <?php echo $landlord_name; ?> to re-enter upon the Demised Premises 
                            without notice and thereupon the Tern shall determine 
                            absolutely. If this lease be transferred or it the 
                            Demised Premises or any part thereof be sublet or occupied 
                            by any person other than  <?php echo $client_name; ?>, <?php echo $landlord_name; ?> may 
                            after default by  <?php echo $client_name; ?>  collect the rent from the 
                            transferee, sub-lessee or occupant and apply the net 
                            amount collected in or towards satisfaction of the rent 
                            (including any additional rent payable hereunder) 
                            hereby reserved but no such transfer, subletting, 
                            occupancy or collection shall be deemed to be a waiver 
                            of this covenant and agreement or an acceptance of the 
                            transferee, sub lessee or occupant as <?php echo $client_name; ?> or a release 
                            of  <?php echo $client_name; ?> of the covenants and agreements on  
                            <?php echo $client_name; ?>' s part herein contained. For the purpose of 
                            this sub-clause and of the last preceding sub-clause 
                            if  <?php echo $client_name; ?> is a private or public limited liability 
                            company the transfer of the beneficial interest in more 
                            than fifty per cent (50%) of its issued share capital
                            shall be deemed lo be a transfer .
                        </article>
                        </div>
                    <div id="s2_25">
                        <span>
                            2.25 Usage Requirement. 
                        </span>
                        <article>
                            Not to use the Demised Premises or any part thereof 
                            otherwise than as a Bakery premises and for ancillary 
                            purposes thereto The usage of the Demised Premises will 
                            be in accordance with the design of the Building and 
                            shall comply with the requirements (if any) of the 
                            Local Authority.
                        </article>
                        </div>
                    <div id="s2_26">
                        <span>
                            2.26 Advertising in the Premises.
                        </span>
                        <article>
                            Not to paint affix or exhibit any name or willing or 
                            any signboard or advertisement in the landings or 
                            passages or upon or outside any entrance, hall, windows, 
                            roof or outside wall of the Building or  any landings 
                            or  passages giving  access thereto save in conformity 
                            with <?php echo $landlord_name; ?>s Architects' design in size, type, 
                            color and placing and with the consent of  <?php echo $landlord_name; ?> 
                            first had and obtained ( with the agreement that such 
                            consent shall not be unreasonably withheld) PROVIDED 
                            ALWAYS that  <?php echo $landlord_name; ?> may at the request and cost 
                            of  <?php echo $client_name; ?> affix the name and occupation of  
                            <?php echo $client_name; ?> in the frame or frames to be provided by  
                            <?php echo $landlord_name; ?> at or near the entrance cl the Building or 
                            the private enhance or doorway to the Demised Premises 
                            or such Other place as the case may be in such manner 
                            in each case as shall conform with the permitted of 
                            other <?php echo $client_name; ?>s (if any ) and as shall from ( me to time 
                            be approved by  <?php echo $landlord_name; ?>
                        </article>
                        </div>
                    <div id="s2_27">
                        <span>
                            2.27 Fire Burning.
                        </span>
                        <article>
                            Not to permit any open or internal combustion fire to 
                            be burned within the Demised Premises without the 
                            consent in writing of  <?php echo $landlord_name; ?> first had and obtained
                            nor without the like consent to bring or permit to be 
                            brought or kept in or on the Demised Premises any Inflammable
                            combustible or explosive fluid, material, chemical or 
                            substance nor cause nor permit any objectionable odours
                            to permeate from the Demised Premises.
                        </article>
                    </div>
                    <div id="s2_30">
                        <span>
                            2.30 Interferences.
                        </span>
                        <article>
                            Not to do nor permit not suffer to be done upon or 
                            within the Demised Premises anything which in the 
                            opinion of  <?php echo $landlord_name; ?> may be or become a nuisance 
                            or annoyance to or in any way interfere with the quiet 
                            user of the other portions of the Building or any 
                            adjoining or neighboring premises.
                        </article>
                        </div>
                    <div id="s2_31">
                        <span>
                            2.31 Fire Equipment.
                        </span>
                        <article>
                            At  <?php echo $client_name; ?> own expense to install in the Demised 
                            Premises such additional firefighting equipment and 
                            appliances as shall be required and approved by  
                            <?php echo $landlord_name; ?> if in  <?php echo $landlord_name; ?>'s opinion the trade business 
                            or occupation of  <?php echo $client_name; ?> is such as for necessitate 
                            such additional equipment and appliances over and above 
                            that and those supplied by  <?php echo $landlord_name; ?>.
                        </article>
                        </div>
                    <div id="s2_32">
                        <span>
                            2.32 <?php echo $client_name; ?> Observation.
                        </span>
                        <article>
                            To perform and observe so for as the same are capable 
                            of being performed and observed by the <? php echo "$client_name ?> all 
                            covenants,agreement and conditions, restrictions 
                            stipulations and provisions affecting the Demised 
                            Premises and under which the piece of land upon which 
                            the Building is erected is held.
                        </article>
                        </div>
                    <div id="s2_33">
                        <span>
                            2.33 Law Compliance.
                        </span>
                        <article>
                            At all times during the continuance of the Term to 
                            comply with all Laws, Acts, orders, rules, regulations 
                            or by-laws enacted, passed,made or issued by the Government 
                            of the said Republic or any County, Municipal  Township,
                            local or other authority in relation to the occupation 
                            or conduct of the Demised Premises AND lo obtain all 
                            such licenses and to execute or cause to be done or 
                            executed all such works and things as under or by virtue 
                            of any law, Act, order, rule, regulation or by-law are 
                            required to be done and at all times to keep  <?php echo $landlord_name; ?> 
                            indemnifieds in thereof 
                        </article>
                        </div>
                    <div id="s2_34">
                        <span>
                            2.34 Display of Particulars.
                        </span>
                        <article>
                            Within seven days of the service thereof to give full 
                            particulars to <?php echo $landlord_name; ?> of any notice, order or 
                            proposals therefor given made or issued under or by 
                            virtue of any Law,Act, Order, rule, regulation or direction 
                            thereunder or under the by-laws of any competent authority 
                            and at all times to display and manta to such notices 
                            as  <?php echo $landlord_name; ?> may require to be displayed on the Demised 
                            Premises.
                        </article>
                        </div>
                    <div id="s2_35">
                        <span>
                            2.35 Permitting  <?php echo $landlord_name; ?> and Agents.
                        </span>
                        <article>
                            To permit  <?php echo $landlord_name; ?> or its agent or agents any 
                            time during the Three months next before the expiration 
                            of the Term to enter upon the Demised Premises and to 
                            permit all persons by order in writing of <?php echo $landlord_name; ?> 
                            or its agent or agents to view the Demised Premises at 
                            reasonable hours in the day time without interruption 
                            AND if during the last month of the Term  <?php echo $client_name; ?> 
                            shall have removed all  of  <?php echo $client_name; ?>'s property from 
                            the Demised Premises  <?php echo $landlord_name; ?> may immediately enter 
                            and alter, renovate and redecorate the Demised Premisess
                            without being liable to make any abatement in the rent
                            hereby reserved and without incurring any liability to 
                            <?php echo $client_name; ?> or any compensation and such acts shall have 
                            no effect upon this lease;
                        </article>
                        </div>
                    <div id="s2_36">
                        <span>
                            2.36 Executing Proceedings.
                        </span>
                        <article>
                            Not to do or permit or suffer to be done any act, matter 
                            or thing whereby an encumbrance  may take possession 
                            of or a receiver and manager may be appointed of or  
                            a distress or execution be levied or enforced upon 
                            or sued out against or analogous proceedings be taken  
                            in respect of tire whole or any part of die undertaking, 
                            assets or property of  <?php echo $client_name; ?> 
                            or whereby  <?php echo $client_name; ?> 
                            may be declared by any competent authority or deemed by 
                            operation of any law to be insolvent or, in the case of 
                            a corporate lessee whereby an order may be made or an 
                            effective resolution passed or analogous proceedings 
                            be instituted for its 'winding up;
                        </article>
                        </div>
                    <div id="s2_37">
                        <span>
                            2.37 Term Expirely.
                        </span>
                        <article>
                            At the expiration or sooner determination of the Term 
                            to yield up the Demised Premises to  <?php echo $landlord_name; ?> with 
                            the fixtures and fittings thereto (other than the other 
                            fixtures, partitions and additions installed or erected 
                            by  <?php echo $client_name; ?> (aid which are not excepted under clause 
                            messioned above which said items shall remain the property 
                            of  <?php echo $client_name; ?> and  <?php echo $client_name; ?> shall cause the same to be 
                            removed on or before the expiry or sooner determination 
                            of this ease) in such good and <? php echo "$client_name ?>able repair and 
                            condition as shall be in accordance with  <?php echo $client_name; ?> 
                            covenants and agreements herein contained and with all 
                            locks, keys and fastenings complete AND  <?php echo $client_name; ?> s 
                            obligation to perform and observe this covenant and 
                            agreement shall survive fie expiration or other 
                            determination of the Term AND if the last day of the 
                            Term shall fell on a Sunday.' Public Holiday this lease 
                            shall expire on the business day immediately following 
                            PROVIDED ALWAYS that nothing herein contained shall 
                            require  <?php echo $client_name; ?> to leave the Demised Premises in 
                            any better state or condition of decoration than they 
                            were at the commencement of the Term
                        </article>
                    </div>
                    <div id="s2_38">
                        <span>
                            2.38 Cost Payment.
                        </span>
                        <article>
                            To pay all costs in connection with the preparation 
                            and completion of this lease and a counterpart thereof 
                            together with all stamp duties registration fees and 
                            other disbursements but excluding  <?php echo $landlord_name; ?> 
                            Advocates' costs.
                        </article>
                    </div>
                </content>
            </section>
            <section id="s3">
                <no>3. Additional obligation of the<?php echo $client_name ?>.</no>
                <content>
                    <p>
                    <div>
                        3. <?php echo $client_name; ?> to the intent that the obligations hereinafter 
                        set out may continue throughout the continuance of the 
                        Term hereby further covenants  and agrees with  <?php echo $landlord_name; ?> 
                        that  <?php echo $client_name; ?>:-
                    </div>
                    <div>
                        <span> 
                            3.1 Factories Act Considerations.
                        </span>
                        <article>
                            Will not use the Demised Premises or any part thereof 
                            in such a way as to render the same subject to the 
                            provisions of the Factories Act or any statutory 
                            amendment or re-enactment thereof.
                        </article>
                    </div>
                    <div>
                        <span>
                            3.2 Preventing Encroachment.
                        </span>
                        <article>
                            Will take all necessary steps to prevent any encroachment 
                            on the Demised Premises or the acquisition of any new 
                            night to light passage, drainage or other elements over, 
                            upon or under the Demised Premises and will give notice 
                            to  <?php echo $landlord_name; ?> of any threatened encroachment or attempt 
                            to acquire any such easement.
                        </article>
                    </div>
                    <div>
                        <span>
                            3.3 No Misuse of Electricity.
                        </span>
                        <article>
                            Will ensure that at all times  <?php echo $client_name; ?>'s use of 
                            electric current on the Demised Premises shall never 
                            exceed the capacity of existing feeders to the Building 
                            or of the rises or wiring installations installed in 
                            the Building and will adhere to all other reasonable 
                            instructions in this regard which may be issued by 
                            <?php echo $landlord_name; ?> or its agents from time to time.
                        </article>  
                    </div>
                    <div>
                        <span>
                            3.4 No Alteration of Electricity.
                        </span>
                        <article>
                            Will not make any alterations or additions to the 
                            electrical equipment or appliance installed in the 
                            Demised Premises whether by  <?php echo $landlord_name; ?> or by  
                            <?php echo $client_name; ?> 'without the prior consent of  <?php echo $landlord_name; ?> 
                            in each instance, such consent not to be unreasonably
                            withheld.
                        </article>
                    </div>
                    <div>
                        <span>
                            3.5 Notifying  <?php echo $landlord_name; ?> Incase of Danger.
                        </span> 
                        <article>
                            Will give immediate notice to  <?php echo $landlord_name; ?> in case of 
                            fire or accidents or any event that may lead to such 
                            fire and accident in the Demised premises or of the 
                            Building or of defects therein or in any fixtures or 
                            equipment therein.
                        </article>
                    </div>
                    <div>
                        <span>
                            3.6 Time to Time Extermination.
                        </span>
                        <article>
                            Will if the Demised Premises shall be or become 
                            infested with vermin, at  <?php echo $client_name; ?> own expense 
                            cause the same to be exterminated from time to time 
                            to the satisfaction of  <?php echo $landlord_name; ?> AND WILL employ 
                            such exterminators as shall be approved by  <?php echo $landlord_name; ?>,
                        </article>
                    </div>
                </content>
            </section>
            <section id="s4">
                <no>4. Obligations of  <?php echo $landlord_name; ?>.</no>
                <content>
                    <p>
                    <div>
                        4 <?php echo $landlord_name; ?> to the extent that the obligations hereinafter 
                        set out may continue throughout the continuance of the Term 
                        covenants and agrees with  <?php echo $client_name; ?> as follows:-
                    </div>
                    <div>
                        <span>
                            4.1 <?php echo $landlord_name; ?> Liability.
                        </span>
                        <article>
                            Unless prevented by any cause beyond its control to 
                            procure the adequate lighting of the entrance halls, 
                            staircases, landings, passages, lifts, lavatories and 
                            washing conveniences in common use by   <?php echo $client_name; ?>,   
                            <?php echo $landlord_name; ?>  and  other  <?php echo $client_name; ?> (if any) during  
                            such  hours  as <?php echo $landlord_name; ?> may reasonably decide
                            and to procure the keeping of the said entrances, 
                            halls, staircases landings, passages, lifts, lavatories 
                            and washing conveniences and all windows affording 
                            light to the same clean and tidy and in good and 
                            <? php echo "$client_name ?>able repair together with the root , foundations, 
                            outside waifs and main structure of the Building 
                            PROVIDED ALWAYS that <?php echo $landlord_name; ?> shall not be liable 
                            for any damage to persons or property caused by or 
                            resulting from or arising out of the default of any 
                           <?php echo $client_name ?> of the Building or any portion thereof, their 
                            servants or agents or licensees with reference to the 
                            maintenance or user of any pipes or sanitary water Or 
                            electrical apparatus therein or caused by any such 
                            persons permitting the maximum floor stress of any 
                            cart of the Building or the permitted maximum total 
                            weight in any lift therein to be exceeded
                        </article>
                        </div>
                    <div>
                        <span>
                            4.2 Premise Maintainance.
                        </span>
                        <article>
                            To repair and keep the main structure of the building 
                            and external areas including the roof in good state 
                            of repair and maintenance during the continuance of 
                            the Term.
                        </article>
                    </div>
                    <div>
                        <span>
                            4.3 Government Payments.
                        </span>
                        <article>
                            To pay all rates, taxes, rent to Government (if any ),
                            dues and other outgoings that are payable in respect 
                            of the property.
                        </article>
                    </div>
                    <div>
                        <span>
                            4.4 Procurement Payment.
                        </span>
                        <article>
                            To procure the payment of the head rent and the Site 
                            Value Tax in respect of the Building to the applicable 
                            authorities if and when the same fall due.
                        </article>
                    </div>
                    <div>
                        <span>
                            4.5 Insurance of the Premises.
                        </span>
                        <article>
                            To procure the keeping of the mam structure of the 
                            Building insured against loss or damage by fire, 
                            lighting,explosion, aircraft and other aerial devices
                            or articles dropped therefrom, impact, riot, strike, 
                            malicious damage and earthquake and/or such other risks 
                            as  <?php echo $landlord_name; ?> may consider appropriate and to procure
                            the rebuilding or reinstating of the Demised Premises 
                            and the entrance, halls, staircases, landings, passages 
                            and lifts giving access to the Demised Premises so far 
                            as the same may be destroyed or damaged but without 
                            prejudice to  <?php echo $client_name; ?>’s liability to pay or contribute 
                            towards the costs thereof in the event of the insurance
                            money being wholly or partially irrecoverable by reason 
                            of any act or default of  <?php echo $client_name; ?> or (he servant or 
                            licensees of  <?php echo $client_name; ?>
                        </article>
                        </div>
                    <div>
                        <span>
                            4.6 Damage/Destruction.
                        </span>
                        <article>
                            Subject as is hereinafter otherwise provided in the 
                            event of the Demised Premises being damaged or 
                            destroyed by fire or other cause and if the policy 
                            or policies of insurance effected by  <?php echo $landlord_name; ?> 
                            shall not have been vitiated or payment of the policy 
                            moneys refused in whole or in part as a consequence
                            of any act of default of  <?php echo $client_name; ?> or of any servant,
                            employee, agent licensee or visitor of  <?php echo $client_name; ?>, to
                            procure the reinstating or rebuilding of the same or 
                            (as the case may require) so much or the Building as 
                            may be necessary so dial the Demised Premises shall 
                            be as commodious and convenient in all respects as 
                            they were before such damage or destruction but not 
                            necessarily identical with the accommodation previously 
                            existing with all convenient speed PROVIDED ALWAYS 
                            that if the Demised Premises are totally damaged or 
                            are rendered wholly un<? php echo "$client_name ?
                            >able by fire or other cause and if  <?php echo $landlord_name; ?> shall
                            decide no! to restore reinstate or rebuild the same 
                            or it the Building shall be so damaged that  <?php echo $landlord_name; ?>
                            shall decide to demolish it or to rebuild it then and
                            in any case, <?php echo $landlord_name; ?> may within Ninety (90) days 
                            after such fire or other cause give to  <?php echo $client_name; ?> 
                            notice in writing in the manner hereinafter provided
                            for the giving of notices of such  <?php echo $landlord_name; ?>'s decision
                            and thereupon the Term shall be determined by lapse 
                            of time upon the Seventh day after such notice is given
                            and  <?php echo $client_name; ?> shall forthwith vacate the Demised Premises
                            and deliver up the same to  <?php echo $landlord_name; ?> and provided that
                             <?php echo $client_name; ?> is not in default under this lease then but
                            not otherwise  <?php echo $client_name; ?> liability for rent shall 
                            cease as from the day following the occurrence of such
                            fire or other cause and PROVIDED ALSO that if the damage
                            or destruction snail have been due to the default neglect
                            of  <?php echo $client_name; ?> then and in such case  <?php echo $client_name; ?> shall 
                            remove all debris at  <?php echo $client_name; ?>’s sole cost and expense.
                        </article>
                    </div>
                    <div>
                        <span>
                            4.7 Procurement of the Employment.
                        </span>
                        <article>
                            To procure the employment/maintenance of and such staff 
                            as may be necessary for the security of the Building 
                            and the Demised Premises and the carrying out of the 
                            obligations on the part of <?php echo $landlord_name; ?> referred to 
                            in sub-clause (a) of this clause
                        </article>
                    </div>
                    <div>
                        <span>
                            4.8 <?php echo $client_name; ?> Paying the Rent.
                        </span>
                        <article>
                            That <?php echo $client_name; ?> paying the rent hereby reserved and 
                            any additional rent winch may be payable hereunder 
                            and performing and observing the several covenants, 
                            agreements, conditions, restrictions stipulations 
                            and provisions herein contained or implied and on 
                            the part of  <?php echo $client_name; ?> to be performed and observed 
                            shall subject as is hereinbefore provided be entitled 
                            peaceably to hold and enjoy the Demised Premises 
                            during the continuance of the Term without any 
                            interruption from or by  <?php echo $landlord_name; ?> or any person 
                            rightfully claiming from or under  <?php echo $landlord_name; ?>.
                        </article>
                        </div>
                    </p>
                </content>
            </section>
            <section id="s5">
                <no>5. Agreement and declaration. </no>
                <content>
                    <p>
                    <div>
                        <span>
                            5.1 Arbitration Act.
                        </span>
                        <article>
                            In the event of the Demised Premises or any part thereof 
                            being damaged or destroyed by fire or other cause during 
                            the continuance of the Term so as to render them unfit 
                            for occupation  <?php echo $landlord_name; ?> will unless such damage 
                            or destruction shall have been due to the act or neglect 
                            of  <?php echo $client_name; ?> or any servant employee agent or licensee 
                            or visitor  <?php echo $client_name; ?> allow to <?php echo $client_name; ?> a total or 
                            proportionate abatement of the rent hereby reserved 
                            as the case may be but so that <?php echo $client_name; ?> shall only 
                            have a right of determination of the lease if such 
                            damage or default shall not have been due to any such 
                            act or neglect as aforesaid and if the Demised Premises 
                            or any pad thereof shall have suffered such destruction 
                            or substantial damage as cannot reasonably be expected 
                            to be repaired within six calendar months PROVIDED ALWAYS 
                            that if any dispute under the sub-clause shall arise 
                            between the parties hereto the matter shall be referred 
                            to an arbitrator to be appointed by the Chairman for 
                            the time being of the Chartered Institute of Arbitrators 
                            Kenya Chapter , whose award shall be final and binding 
                            upon the parties hereto and such reference shall be 
                            deemed to be an arbitration within the meaning of - 
                            the Arbitration Act (Chapter 49) or any Acts amending 
                            or replacing the same.
                        </article>
                    </div>
                    <div>
                        <span>
                            5.2 <?php echo $client_name; ?> breach of the contract.
                        </span>
                        <article>
                            If the said rent or any other payment due hereunder by 
                            <?php echo $client_name; ?> or any part thereof shall be in arrears for 
                            the space of Thirty (30) days next after any of the days 
                            whereon the same ought to be paid as aforesaid whether 
                            the same shall have been legally demanded or not, or 
                            if die Demised Premises become vacant or deserted or 
                            if there shall be any breach or non-performance or 
                            non-observance by  <?php echo $client_name; ?> of any of the covenants, 
                            agreements, conditions, restrictions, stipulations and 
                            provisions herein contained and on the part of  
                            <?php echo $client_name; ?>s to be performed and observed or if  <?php echo $client_name; ?> 
                            for the time being shall be a company and shall enter 
                            into liquidation whether compulsory or  voluntary  
                            (not  being  a  voluntary  liquidation  merely  for  
                            the  purpose  of  reconstruction  or amalgamation) or 
                            if  <?php echo $client_name; ?> for the hire being shall be a person or 
                            persons and shall commit any act of Bankruptcy or be 
                            adjudged Bankrupt or enter into any agreement or make 
                            any arrangements with or for the benefit of his. Her 
                            or their creditors for the liquidation of his her or 
                            their  debts by composition or otherwise then and in 
                            any such case it shall and may be lawful for  
                            <?php echo $landlord_name; ?> at any time thereafter to enter into and upon 
                            the Demised Premises or any part thereof in the name 
                            of the whole and the same to have again repossess and 
                            enjoy as in its former state anything herein contained 
                            to the contrary notwithstanding without prejudice to 
                            any right of action or remedy of  <?php echo $landlord_name; ?> in respect 
                            of any antecedent breach of any of the covenants and 
                            agreements by  <?php echo $client_name; ?> herein before contained AND 
                            <?php echo $client_name; ?> hereby waives any right to notice of re-entry 
                            or forfeiture under any law for the time being in force.
                        </article>
                    </div>
                    <div>
                        <span>
                            5.3 Agreement for Payment. 
                        </span>
                        <article>
                            No liability shall attach in respect of any breach of 
                            any positive covenant or agreement (other than covenants 
                            and agreements for the payment of money) on the part 
                            of <?php echo $landlord_name; ?> or  <?php echo $client_name; ?> herein contained or implied 
                            so long as they shall be prevented from performing the 
                            same by statutory restrictions except that if such breach 
                            shall occur as aforesaid <?php echo $landlord_name; ?> or die <?php echo $client_name; ?> as 
                            the case may be shall remedy such bread immediately 
                            conditions permit and in the event of any such breach 
                            of a covenant or agreement on the part of  <?php echo $client_name; ?> 
                            not having been remedied before the expiration or sooner 
                            determination of the Term  <?php echo $client_name; ?> shall forthwith 
                            upon such expiration or sooner determination pay to  
                            <?php echo $landlord_name; ?> such an amount as shall be necessary to remedy 
                            such breach as aforesaid;
                        </article>
                        </div>
                    <div>
                        <span>
                            5.4 Subject and Surbordinate Lease.
                        </span>
                        <article>
                            This lease is subject and subordinate to ail ground 
                            or underlying leases and to any charges which may now 
                            or hereafter affect such leases or the Demised Premises 
                            of which the Demised Premises form part and to all 
                            renewals, modifications, consolidation, replacements 
                            and extensions thereof;
                        </article>
                    </div>
                    <div>
                        <span>
                            5.5 Performance of agreements.
                        </span>
                        <article>
                            If  <?php echo $client_name; ?> shall default in the performance or 
                            observance of any of the covenants agreement conditions 
                            stipulations and provisions herein contained or implied 
                            and on  <?php echo $client_name; ?>'s part to he performed or observed 
                            <?php echo $landlord_name; ?> may after giving  <?php echo $client_name; ?> Fourteen (14) 
                            days, notice perform the same for the account of  
                            <?php echo $client_name; ?> and if <?php echo $landlord_name; ?> shall make any expenditure 
                            or incur any obligations for the payment of money in 
                            connection therewith including but not limited to 
                            advocates' fees in instituting prosecuting or defending 
                            any action or proceeding such sums paid or obligations 
                            incurred with interest and costs shall be deemed to 
                            be additional rent hereunder and shall be paid by the 
                            <?php echo $client_name; ?> to <?php echo $landlord_name; ?> -within Thirty (30) days of the 
                            furnishing or rendering to <?php echo $client_name; ?> of any bill or 
                            statement therefor;
                        </article>
                    </div>
                    <div>
                        <span>
                            5.6 Failure of the <?php echo $landlord_name; ?>.
                        </span>
                        <article>
                            The failure of <?php echo $landlord_name; ?> to seek redress for violation 
                            of or to insist upon the strict performance of any 
                            covenant agreement condition restriction stipulation 
                            or provision of this tease or any of the rules and 
                            regulations from time to time promulgated by  
                            <?php echo $landlord_name; ?> shall not prevent any subsequent act which 
                            would have originally constituted a violation from 
                            having all the force and effect of an original violation 
                            AND the receipt by <?php echo $landlord_name; ?> of any rent with the 
                            knowledge of the breach of any covenant agreement 
                            condition restriction stipulation or provision of 
                            this lease shall not be deemed to be a waiver of 
                            such breach NOR shall the failure of <?php echo $landlord_name; ?> 
                            to enforce any such rule or regulation as aforesaid 
                            against  <?php echo $client_name; ?> be deemed to be a waiver of any 
                            such rules or regulations unless such waver be expressly 
                            made by <?php echo $landlord_name; ?> in writing NOR shall any payment 
                            by  <?php echo $client_name; ?> or any receipt by  <?php echo $landlord_name; ?> of a lesser 
                            amount than the monthly rent hereby served be deemed to 
                            be other than on account of the earliest simulated rent 
                            nor shall any endorsement or statement on any cheque 
                            or any letter accompanying any cheque or payment as 
                            rent be deemed to be an accord and satisfaction and 
                            <?php echo $landlord_name; ?> may accept any such cheque or payment 
                            without prejudice to <?php echo $landlord_name; ?>'s right to recover 
                            the balance of such rent or pursue any other remedy 
                            in this lease provided;
                        </article>
                    </div>
                    <div>
                        <span>
                            5.7 Lands Registry Agreement.
                        </span>
                        <article>
                            No provision contained in this lease shall be waived 
                            or varied by either party hereto except by agreement 
                            in writing which agreement shall if the case so requires 
                            be duly registered in the relevant Lands Registry ;
                        </article>
                    </div>
                    <div>
                        <span>
                            5.8 <?php echo $landlord_name; ?> Delay.
                        </span>
                        <article>
                            No delay by  <?php echo $landlord_name; ?> in exercising any of its right 
                            hereunder shall be deemed to be in any way a waiver of 
                            such rights
                        </article>
                    </div>
                </content>
            </section>
            <section id="s6">
                <no>6. Conditions of  <?php echo $landlord_name; ?>.</no>
                <content>
                    <p>
                    <div>
                        <article>
                            <?php echo $landlord_name; ?> shall hold the deposit reserved in clause 
                            2.1 above to the credit of  <?php echo $client_name; ?> account (without 
                            payment of interest thereon) upon the following terms 
                            and conditions:
                        </article>
                    </div>
                    <list>
                    <li>
                        (i) <?php echo $landlord_name; ?> shall return the said sum to  <?php echo $client_name; ?> 
                        upon the expiration of the term subject as hereinafter provided.
                    
                    <li>
                        (ii)    PROVIDED ALWAYS that in the event that  <?php echo $client_name; ?> 
                        shall make default in paying any instalment of rent as 
                        hereinbefore provided or shall commit any breach of any 
                        of the covenants conditions and previsions herein contained 
                        and on the pad of  <?php echo $client_name; ?> to he performed and observed 
                        resulting in any loss damage or expenses to the <?php echo $landlord_name; ?> 
                        then such sum as aforesaid or so much thereof as nary be 
                        necessary may be applied by <?php echo $landlord_name; ?> in making good 
                        any such loss, default or damage or expense but without 
                        prejudice to any right of action or remedy of  <?php echo $landlord_name;?> 
                        against  <?php echo $client_name; ?> in respect of such non-payment or breach 
                        on the part of  <?php echo $client_name; ?>
                    
                </content>
            </section>
            <section id="s7">
                <no>7. Termination of the agreement.</no>
                <content>
                    <p>
                        Either party may terminate this lease for reason of breach 
                        or default in the performance or observance of any of the 
                        covenants, agreements, conditions, restrictions, stipulations 
                        and provisions herein contained or implied and on the part 
                        of the other party to be performed;such breach continuing 
                        un-remedied despite due notice having been given,  subject 
                        to the party seeking such determination giving the other 
                        at least twelve (12) calendar months’ notice in writing 
                        of his/her intention so to do and  <?php echo $client_name; ?> shall at all 
                        times down to the  time  of  such  determination  pay  the  
                        rent  and perform  and  observe all  the covenants, agreements, 
                        conditions, restrictions,  stipulations and provisions herein 
                        contained and on the part of  <?php echo $client_name; ?> to he performed and 
                        observed and shall pay all costs properly incurred by  
                        <?php echo $landlord_name; ?> in effecting completion, stamping and registration 
                        of a formal surrender of this Lease.
                    </p>
                </content>
            </section>
            <section id="s8">
                <no>8. <?php echo $client_name; ?> renewal terms.</no>
                <content>
                    <p>
                        If  <?php echo $client_name; ?> shall des re to obtain a further lease 
                        of the Premises for a further new term lo be agreed upon
                        by the Parties from the expiry of the Term hereby created, 
                        <?php echo $client_name; ?> shall deliver to  <?php echo $landlord_name; ?> a whiten notice 
                        of such desire Three (3) calendar months at least before 
                        the expiry of the  Term and provided there shall not at 
                        the time of such request be any existing breach or non-
                        observance of any of the covenants agreements conditions 
                        and provisions herein contained or implied and on the part 
                        of  <?php echo $client_name; ?> lo be observed or performed then subject as 
                        hereinafter provided <?php echo $landlord_name; ?> shall grant to Use <?php echo $client_name; ?> 
                        a Lease of the Premises for a further term as shall be agreed 
                        upon by die Parties from the expiration of the term hereby 
                        created escaping the present covenant for renewal at a fair 
                        market rent which shall be mutually agreed by the parties 
                        thereof within the period of One (1) calendar month tom the 
                        receipt by <?php echo $landlord_name; ?> of  <?php echo $client_name; ?>s notice to renew this 
                        Lease and in default of such mutual  agreement at such rent 
                        as shall be assessed before the expiry of the Term hereby 
                        created by an  independent value agreed upon by  <?php echo $landlord_name; ?> 
                        and  <?php echo $client_name; ?> as the then current rental value of the premises.
                    </p>
                </content>
            </section>
            <section id="s9">
                <no>9. Conditions of either <? php echo "$client_name ?> and <?php echo $landlord_name; ?></no>
                <content>
                    <p>
                        Any notice under this Lease shall be in writing and any 
                        notice to  <?php echo $client_name; ?> shall be sufficiently served if addressed 
                        to  <?php echo $client_name; ?> and delivered to the Premises or sent by 
                        registered post to the address given above or to  <?php echo $client_name; ?> 
                        last known address in  Kenya and any notice to  <?php echo $landlord_name; ?> 
                        shall be sufficiency served if served on any agent authorised 
                        by  <?php echo $landlord_name; ?> to receive or who has in fact or their behalf 
                        collected the rent of the Premises.   Any notice served by 
                        registered post shall he deemed to have been served within 
                        seven (7 ) days following the day on which it is posted.
                    </p>
                </content>
            </section>
            <section id="s10">
                <no>10. Agreement</no>
                <content>
                    <p>
                        <?php echo $client_name; ?>  hereby  agrees  to  accept  this Lease 
                        subject  to  the covenants  agreements  restrictions 
                        simulations and provisions above set forth or referred to.
                    </p>
                </content>
            </section>
            <section id="s11">
                <no>11 WITNESS. </no>
                <content>
                    <div>
                        IN WITNESS WHEREOF this Lease has been duly executes by 
                        the parties hereto the date and year first hereinbefore 
                        written SEALED with the common seat of  MUTALL in 
                        the presence of:-<br> 
                        <p>Director's Signature...........................................<br> 
                        <p>Director/Secretary's Signature.................................<br>
                        <p>DEEKOS  director's Signature.................................<br>
                        <p>I CERTIFY that the above named  Directors and  Director/
                        Secretary of <?php echo $landlord_name; ?> and DEEKOS 
                        respectively appeared before me on the day of........................ 
                        2020 and (being known to me) acknowledged the above signatures 
                        or mark to be theirs and that they had freely and voluntarily
                        executed this instrument and understood its contents.<br>
                        <p>Advocate's Signature.........................................<br> 
                        SIGNED by the duly authorised Attorney of the <?php echo $client_name;?> 
                        in the presence of the ADVOCATE.<br> 
                        <p>I CERTIFY that a duly constituted Attorney <?php echo $client_name; ?>
                        appeared before me on the ..............................day of 
                        2020 and (being known to me) acknowledged the above signature
                        or mark to be theirs and that they had freely and voluntarily
                        executed this document and understood it’s content.<br> 
                        <p>Advocate’s signature...................... 
                    </div>
                    </content>
            </section>
        </div>
    </body>
</html>

