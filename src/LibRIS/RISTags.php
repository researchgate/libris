<?php

namespace LibRIS;

class RISTags
{
    /**
     * @retval string[]
     */
    public static function getTags(): array
    {
        return array_keys(self::$tagMap);
    }

    /**
     * @retval string[]
     */
    public static function getTypes(): array
    {
        return array_keys(self::$typeMap);
    }

    public static function describeTag(string $tag): ?string
    {
        return self::$tagMap[$tag] ?? null;
    }

    public static function describeType(string $type): ?string
    {
        return self::$typeMap[$type] ?? null;
    }

    /**
     * The definitive list of all fields.
     * @var array
     * @see http://en.wikipedia.org/wiki/RIS_%28file_format%29
     * @see http://www.refman.com/support/risformat_intro.asp
     */
    public static $tagMap = [
     'TY' => 'Type of reference',
     'A1' => 'First author',
     'A2' => 'Secondary author',
     'A3' => 'Tertiary author',
     'A4' => 'Subsidiary author',
     'AB' => 'Abstract',
     'AD' => 'Author address',
     'AN' => 'Accession number',
     'AU' => 'Author',
     'AV' => 'Location in archives',
     'BT' => 'T2',
     'C1' => 'Custom 1',
     'C2' => 'Custom 2',
     'C3' => 'Custom 3',
     'C4' => 'Custom 4',
     'C5' => 'Custom 5',
     'C6' => 'Custom 6',
     'C7' => 'Custom 7',
     'C8' => 'Custom 8',
     'CA' => 'Caption',
     'CN' => 'Call number',
     'CP' => '',
     'CT' => 'Title of unpublished reference',
     'CY' => 'Place published',
     'DA' => 'Date',
     'DB' => 'Name of database',
     'DO' => 'DOI',
     'DP' => 'Database provider',
     'ED' => 'Editor',
     'EP' => 'End page',
     'ET' => 'Edition',
     'ID' => 'Reference ID',
     'IS' => 'Issue number',
     'J1' => 'Periodical name - User abbreviation 1',
     'J2' => 'Alternate title',
     'JA' => 'Periodical name: standard abbreviation',
     'JF' => 'Journal/Periodical name',
     'JO' => 'Journal/Periodical name',
     'KW' => 'Keywords',
     'L1' => 'Link to PDF',
     'L2' => 'Link to full-text',
     'L3' => 'Related records',
     'L4' => 'Image(s)',
     'LA' => 'Language',
     'LB' => 'Label',
     'LK' => 'Website link',
     'M1' => 'Number',
     'M2' => 'Miscellaneous 2',
     'M3' => 'Type of work',
     'N1' => 'Notes',
     'N2' => 'Abstract',
     'NV' => 'Number of volumes',
     'OP' => 'Original publication',
     'PB' => 'Publisher',
     'PP' => 'Publishing place',
     'PY' => 'Publication year',
     'RI' => 'Reviewed item',
     'RN' => 'Research notes',
     'RP' => 'Reprint edition',
     'SE' => 'Section',
     'SN' => 'ISBN/ISSN',
     'SP' => 'Start page',
     'ST' => 'Short title',
     'T1' => 'Primary title',
     'T2' => 'Secondary title',
     'T3' => 'Tertiary title',
     'TA' => 'Translated author',
     'TI' => 'Title',
     'TT' => 'Translated title',
     'U1' => 'User definable 1',
     'U2' => 'User definable 2',
     'U3' => 'User definable 3',
     'U4' => 'User definable 4',
     'U5' => 'User definable 5',
     'UR' => 'URL',
     'VL' => 'Volume number',
     'VO' => 'Published standard number',
     'Y1' => 'Primary date',
     'Y2' => 'Access date',
     'ER' => 'End of reference',
   ];

    /** @var array<string, string> */
    public static $tagDescriptions = [
    'TY' => 'Type of reference (must be the first tag)',
    'A1' => 'First author',
    'A2' => 'Secondary author (each author on its own line preceded by the tag)',
    'A3' => 'Tertiary author (each author on its own line preceded by the tag)',
    'A4' => 'Subsidiary author (each author on its own line preceded by the tag)',
    'AB' => 'Abstract',
    'AD' => 'Author address',
    'AN' => 'Accession number',
    'AU' => 'Author (each author on its own line preceded by the tag)',
    'AV' => 'Location in archives',
    'BT' => 'This field maps to T2 for all reference types except for Whole Book and Unpublished Work references. It can contain alphanumeric characters. There is no practical limit to the length of this field.',
    'C1' => 'Custom 1',
    'C2' => 'Custom 2',
    'C3' => 'Custom 3',
    'C4' => 'Custom 4',
    'C5' => 'Custom 5',
    'C6' => 'Custom 6',
    'C7' => 'Custom 7',
    'C8' => 'Custom 8',
    'CA' => 'Caption',
    'CN' => 'Call number',
    'CP' => 'This field can contain alphanumeric characters. There is no practical limit to the length of this field.',
    'CT' => 'Title of unpublished reference',
    'CY' => 'Place published',
    'DA' => 'Date',
    'DB' => 'Name of database',
    'DO' => 'DOI',
    'DP' => 'Database provider',
    'ED' => 'Editor',
    'EP' => 'End page',
    'ET' => 'Edition',
    'ID' => 'Reference ID',
    'IS' => 'Issue number',
    'J1' => 'Periodical name - User abbreviation 1. This is an alphanumeric field of up to 255 characters.',
    'J2' => 'Alternate title (this field is used for the abbreviated title of a book or journal name, the latter mapped to T2)',
    'JA' => 'Periodical name: standard abbreviation. This is the periodical in which the article was (or is to be, in the case of in-press references) published. This is an alphanumeric field of up to 255 characters.',
    'JF' => 'Journal/Periodical name: full format. This is an alphanumeric field of up to 255 characters.',
    'JO' => 'Journal/Periodical name: full format. This is an alphanumeric field of up to 255 characters.',
    'KW' => 'Keywords (keywords should be entered each on its own line preceded by the tag)',
    'L1' => 'Link to PDF. There is no practical limit to the length of this field. URL addresses can be entered individually, one per tag or multiple addresses can be entered on one line using a semi-colon as a separator.',
    'L2' => 'Link to full-text. There is no practical limit to the length of this field. URL addresses can be entered individually, one per tag or multiple addresses can be entered on one line using a semi-colon as a separator.',
    'L3' => 'Related records. There is no practical limit to the length of this field.',
    'L4' => 'Image(s). There is no practical limit to the length of this field.',
    'LA' => 'Language',
    'LB' => 'Label',
    'LK' => 'Website link',
    'M1' => 'Number',
    'M2' => 'Miscellaneous 2. This is an alphanumeric field and there is no practical limit to the length of this field.',
    'M3' => 'Type of work',
    'N1' => 'Notes',
    'N2' => 'Abstract. This is a free text field and can contain alphanumeric characters. There is no practical length limit to this field.',
    'NV' => 'Number of volumes',
    'OP' => 'Original publication',
    'PB' => 'Publisher',
    'PP' => 'Publishing place',
    'PY' => 'Publication year (YYYY/MM/DD)',
    'RI' => 'Reviewed item',
    'RN' => 'Research notes',
    'RP' => 'Reprint edition',
    'SE' => 'Section',
    'SN' => 'ISBN/ISSN',
    'SP' => 'Start page',
    'ST' => 'Short title',
    'T1' => 'Primary title',
    'T2' => 'Secondary title (journal title, if applicable)',
    'T3' => 'Tertiary title',
    'TA' => 'Translated author',
    'TI' => 'Title',
    'TT' => 'Translated title',
    'U1' => 'User definable 1. This is an alphanumeric field and there is no practical limit to the length of this field.',
    'U2' => 'User definable 2. This is an alphanumeric field and there is no practical limit to the length of this field.',
    'U3' => 'User definable 3. This is an alphanumeric field and there is no practical limit to the length of this field.',
    'U4' => 'User definable 4. This is an alphanumeric field and there is no practical limit to the length of this field.',
    'U5' => 'User definable 5. This is an alphanumeric field and there is no practical limit to the length of this field.',
    'UR' => 'URL',
    'VL' => 'Volume number',
    'VO' => 'Published standard number',
    'Y1' => 'Primary date',
    'Y2' => 'Access date',
    'ER' => 'End of reference (must be the last tag)',
  ];

    /**
     * Map of all types (tag TY) defined for RIS.
     * @var array
     * @see http://en.wikipedia.org/wiki/RIS_%28file_format%29
     * @see http://www.refman.com/support/risformat_intro.asp
     */
    public static $typeMap = [
    'ABST' => 'Abstract',
    'ADVS' => 'Audiovisual material',
    'AGGR' => 'Aggregated database',
    'ANCIENT' => 'Ancient text',
    'ART' => 'Art work',
    'BILL' => 'Bill',
    'BLOG' => 'Blog',
    'BOOK' => 'Whole book',
    'CASE' => 'Case',
    'CHAP' => 'Book chapter',
    'CHART' => 'Chart',
    'CLSWK' => 'Classical work',
    'COMP' => 'Computer program',
    'CONF' => 'Conference proceeding',
    'CPAPER' => 'Conference paper',
    'CTLG' => 'Catalog',
    'DATA' => 'Data file',
    'DBASE' => 'Online database',
    'DICT' => 'Dictionary',
    'EBOOK' => 'Electronic book',
    'ECHAP' => 'Electronic book section',
    'EDBOOK' => 'Edited book',
    'ELEC' => 'Web page',
    'EJOUR' => 'Electronic article',
    'ENCYC' => 'Encyclopedia',
    'EQUA' => 'Equation',
    'FIGURE' => 'Figure',
    'GEN' => 'Generic',
    'GOVDOC' => 'Government document',
    'GRANT' => 'Grant',
    'HEAR' => 'Hearing',
    'ICOMM' => 'Internet Communication',
    'INPR' => 'In Press',
    'JFULL' => 'Journal (full)',
    'JOUR' => 'Journal',
    'LEGAL' => 'Legal rule or regulation',
    'MANSCPT' => 'Manuscript',
    'MAP' => 'Map',
    'MGZN' => 'Magazine article',
    'MPCT' => 'Motion picture',
    'MULTI' => 'Online multimedia',
    'MUSIC' => 'Music score',
    'NEWS' => 'Newspaper',
    'PAMP' => 'Pamphlet',
    'PAT' => 'Patent',
    'PCOMM' => 'Personal communication',
    'RPRT' => 'Report',
    'SER' => 'Serial publication',
    'SLIDE' => 'Slide',
    'SOUND' => 'Sound recording',
    'STAND' => 'Standard',
    'STAT' => 'Statute',
    'THES' => 'Thesis/Dissertation',
    'UNPB' => 'Unpublished work',
    'VIDEO' => 'Video recording',
  ];
}
