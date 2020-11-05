pragma solidity >=0.4.22 <0.7.0;
pragma experimental ABIEncoderV2;

contract Hackthon
{
    uint256 public testSize;
    uint256 public certificateSize;
    address owner;  
    struct test_report
    {
        string crop;
        string variety;
        
        string lot_no;
        string pure_seed;
        string inert_matter;
        string Germination;
        string genetic_purity;
        string test_date;
        
    }
    
    struct certificate
    {
        
        string crop;
        string variety;
        string source_tag;
        string lot_no;
        string certificate_no;
        string certificate_date;
        string certificate_validity;    
    }
    
    event save_testreport(string source_tag);
    event save_certificate(string source_tag);
    modifier owneronly
    {
         require(msg.sender == owner, "Caller is not owner");
        _;
    }
    
    
    constructor() public 
    {
     testSize=0;
     certificateSize=0;
     owner = msg.sender;
    }
    
    mapping(uint256 => test_report) public test;
    mapping(uint256=> certificate) public cert;
    
    function insert_certificate(
        string crop,
        string variety,
        string source_tag,
        string lot_no,
        string certificate_no,
        string certificate_date,
        string certificate_validity) public 
        {
        cert[certificateSize]=certificate(crop,variety,source_tag,lot_no,certificate_no,certificate_date,certificate_validity);
        certificateSize++;
        }
        
    function insert_test(
        string memory crop,
        string memory variety,
        
        string memory lot_no,
        string memory pure_seed,
        string memory inert_matter,
        string memory Germination,
        string memory genetic_purity,
        string memory test_date)public owneronly 
        {
            test[testSize]=test_report(crop,variety,lot_no,pure_seed,inert_matter,Germination,genetic_purity,test_date);
            testSize++;
        }
        
    function get_testreport(string lot_no) public view returns(string,string,string,string,string,string,string,string)
    {
        uint256 i;
        
        for(i=0;i<=testSize;i++)
        {
             if((keccak256(abi.encodePacked(test[i].lot_no)))==(keccak256(abi.encodePacked(lot_no))))
             {
               test_report memory t=test[i];
               return(t.crop,t.variety,t.lot_no,t.pure_seed,t.inert_matter,t.Germination,t.genetic_purity,t.test_date);
             }
        }
                
    }
    
     function get_certificate(string source_tag) public view returns(string,string,string,string,string,string,string)
    {
        uint256 i;
        
        for(i=0;i<=certificateSize;i++)
        {
             if((keccak256(abi.encodePacked(cert[i].source_tag)))==(keccak256(abi.encodePacked(source_tag))))
             {
               certificate memory c=cert[i];
               return(c.crop,c.variety,c.source_tag,c.lot_no,c.certificate_no,c.certificate_date,c.certificate_validity);
             }
        }
                
    }
        
}