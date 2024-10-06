<?xml version="1.0" encoding="UTF-8"?>
<Invoice xmlns="urn:oasis:names:specification:ubl:schema:xsd:Invoice-2" xmlns:cac="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2" xmlns:cbc="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2" xmlns:ext="urn:oasis:names:specification:ubl:schema:xsd:CommonExtensionComponents-2" xmlns:sac="urn:oasis:names:specification:ubl:schema:xsd:SignatureAggregateComponents-2" xmlns:sbc="urn:oasis:names:specification:ubl:schema:xsd:SignatureBasicComponents-2" xmlns:sig="urn:oasis:names:specification:ubl:schema:xsd:CommonSignatureComponents-2">
    <ext:UBLExtensions>
        <ext:UBLExtension>
            <ext:ExtensionURI>urn:oasis:names:specification:ubl:dsig:enveloped:xades</ext:ExtensionURI>
            <ext:ExtensionContent>
                <sig:UBLDocumentSignatures>
                    <sac:SignatureInformation>
                        <cbc:ID>urn:oasis:names:specification:ubl:signature:1</cbc:ID>
                        <sbc:ReferencedSignatureID>urn:oasis:names:specification:ubl:signature:Invoice</sbc:ReferencedSignatureID>
                        <ds:Signature xmlns:ds="http://www.w3.org/2000/09/xmldsig#" Id="signature">
                            <ds:SignedInfo>
                                <ds:CanonicalizationMethod Algorithm="http://www.w3.org/2006/12/xml-c14n11" />
                                <ds:SignatureMethod Algorithm="http://www.w3.org/2001/04/xmldsig-more#ecdsa-sha256" />
                                <ds:Reference Id="invoiceSignedData" URI="">
                                    <ds:Transforms>
                                        <ds:Transform Algorithm="http://www.w3.org/TR/1999/REC-xpath-19991116">
                                            <ds:XPath>not(//ancestor-or-self::ext:UBLExtensions)</ds:XPath>
                                        </ds:Transform>
                                        <ds:Transform Algorithm="http://www.w3.org/TR/1999/REC-xpath-19991116">
                                            <ds:XPath>not(//ancestor-or-self::cac:Signature)</ds:XPath>
                                        </ds:Transform>
                                        <ds:Transform Algorithm="http://www.w3.org/TR/1999/REC-xpath-19991116">
                                            <ds:XPath>not(//ancestor-or-self::cac:AdditionalDocumentReference[cbc:ID='QR'])</ds:XPath>
                                        </ds:Transform>
                                        <ds:Transform Algorithm="http://www.w3.org/2006/12/xml-c14n11" />
                                    </ds:Transforms>
                                    <ds:DigestMethod Algorithm="http://www.w3.org/2001/04/xmlenc#sha256" />
                                    <ds:DigestValue>/yJQxgA+ymKWbOlbDDAWKhyQnzc95EKcAWvT6Qj5IaM=</ds:DigestValue>
                                </ds:Reference>
                                <ds:Reference Type="http://www.w3.org/2000/09/xmldsig#SignatureProperties" URI="#xadesSignedProperties">
                                    <ds:DigestMethod Algorithm="http://www.w3.org/2001/04/xmlenc#sha256" />
                                    <ds:DigestValue>MTFlNzY4OTk3ZDc3OGE3ZDExOGIwOTUzNzE2OWEyODQ0OTk4ZWRmOWY1ZTQzMDAwZDRjOTUwZmQzNTgwZGUzZQ==</ds:DigestValue>
                                </ds:Reference>
                            </ds:SignedInfo>
                            <ds:SignatureValue>MEYCIQDkOP3r12Q7pYBCofvFs7T8vy5Xs/CpnCO+x+C5rVOV6QIhAKcb+uUp4RkY0rQi4gCEs4MFUMO70d0lCV14gynYkRaV</ds:SignatureValue>
                            <ds:KeyInfo>
                                <ds:X509Data>
                                    <ds:X509Certificate>MIIE4zCCBImgAwIBAgITegAALzfpPGY2F7fidQABAAAvNzAKBggqhkjOPQQDAjBiMRUwEwYKCZImiZPyLGQBGRYFbG9jYWwxEzARBgoJkiaJk/IsZAEZFgNnb3YxFzAVBgoJkiaJk/IsZAEZFgdleHRnYXp0MRswGQYDVQQDExJQRVpFSU5WT0lDRVNDQTMtQ0EwHhcNMjMxMjI4MDc0MjAwWhcNMjUxMjI4MDc1MjAwWjBPMQswCQYDVQQGEwJTQTEUMBIGA1UEChMLTm9vciBUcmF2ZWwxFDASBgNVBAsTC05vb3IgVHJhdmVsMRQwEgYDVQQDEwtOb29yIFRyYXZlbDBWMBAGByqGSM49AgEGBSuBBAAKA0IABNNy1WVuT1D1RffSo3G2YCE5t0aabFoJho04IogCH2z2CFUnNIrVjJ+1xOk7vb2KzhVlx4GG8fXCqqME7zCR6xmjggMyMIIDLjCBnAYDVR0RBIGUMIGRpIGOMIGLMTYwNAYDVQQEDC0xLVNMfDItV0VCfDMtYTVlNTY1YWMtZjE1Mi00YTAyLWFkODgtOWY0NzQ0NzcxHzAdBgoJkiaJk/IsZAEBDA8zMDA0NjQ1Nzg5MDAwMDMxDTALBgNVBAwMBDExMDAxDjAMBgNVBBoMBTM0MzI3MREwDwYDVQQPDAhJbmR1c3RyeTAdBgNVHQ4EFgQUuhC5TGYM4A1qjo0znPpPQald4BMwHwYDVR0jBBgwFoAU3YNxE465tXNvpniAf7zPmh+/BRAwgeUGA1UdHwSB3TCB2jCB16CB1KCB0YaBzmxkYXA6Ly8vQ049UEVaRUlOVk9JQ0VTQ0EzLUNBKDEpLENOPVBSWkVJTlZPSUNFUEtJMyxDTj1DRFAsQ049UHVibGljJTIwS2V5JTIwU2VydmljZXMsQ049U2VydmljZXMsQ049Q29uZmlndXJhdGlvbixEQz1leHR6YXRjYSxEQz1nb3YsREM9bG9jYWw/Y2VydGlmaWNhdGVSZXZvY2F0aW9uTGlzdD9iYXNlP29iamVjdENsYXNzPWNSTERpc3RyaWJ1dGlvblBvaW50MIHOBggrBgEFBQcBAQSBwTCBvjCBuwYIKwYBBQUHMAKGga5sZGFwOi8vL0NOPVBFWkVJTlZPSUNFU0NBMy1DQSxDTj1BSUEsQ049UHVibGljJTIwS2V5JTIwU2VydmljZXMsQ049U2VydmljZXMsQ049Q29uZmlndXJhdGlvbixEQz1leHR6YXRjYSxEQz1nb3YsREM9bG9jYWw/Y0FDZXJ0aWZpY2F0ZT9iYXNlP29iamVjdENsYXNzPWNlcnRpZmljYXRpb25BdXRob3JpdHkwDgYDVR0PAQH/BAQDAgeAMDwGCSsGAQQBgjcVBwQvMC0GJSsGAQQBgjcVCIGGqB2E0PsShu2dJIfO+xnTwFVmgZzYLYPlxV0CAWQCARAwHQYDVR0lBBYwFAYIKwYBBQUHAwIGCCsGAQUFBwMDMCcGCSsGAQQBgjcVCgQaMBgwCgYIKwYBBQUHAwIwCgYIKwYBBQUHAwMwCgYIKoZIzj0EAwIDSAAwRQIgd7y5DqfdwNOIl1IMq9rFOqvAAKrmB/xjEuA6Rdzqu6ICIQDAFCLyvmK0nxV8FHTLubLbZhxJccfv4pRmsRYwKeeRPA==</ds:X509Certificate>
                                </ds:X509Data>
                            </ds:KeyInfo>
                            <ds:Object>
                                <xades:QualifyingProperties xmlns:xades="http://uri.etsi.org/01903/v1.3.2#" Target="signature">
                                    <xades:SignedProperties Id="xadesSignedProperties">
                                        <xades:SignedSignatureProperties>
                                            <xades:SigningTime>2024-02-21T09:14:37</xades:SigningTime>
                                            <xades:SigningCertificate>
                                                <xades:Cert>
                                                    <xades:CertDigest>
                                                        <ds:DigestMethod Algorithm="http://www.w3.org/2001/04/xmlenc#sha256" />
                                                        <ds:DigestValue>ZDg1NTU3YTk1NzJhMGUxMjM1NGM4ZTU3NmI5NzkyOWQ1N2ZkMDNkZTNmMWQ5NzM3ZDIwMDRjNTU0NTk4Y2RiOA==</ds:DigestValue>
                                                    </xades:CertDigest>
                                                    <xades:IssuerSerial>
                                                        <ds:X509IssuerName>CN=PEZEINVOICESCA3-CA, DC=extgazt, DC=gov, DC=local</ds:X509IssuerName>
                                                        <ds:X509SerialNumber>2720690976984758739138085872917851862391074615</ds:X509SerialNumber>
                                                    </xades:IssuerSerial>
                                                </xades:Cert>
                                            </xades:SigningCertificate>
                                        </xades:SignedSignatureProperties>
                                    </xades:SignedProperties>
                                </xades:QualifyingProperties>
                            </ds:Object>
                        </ds:Signature>
                    </sac:SignatureInformation>
                </sig:UBLDocumentSignatures>
            </ext:ExtensionContent>
        </ext:UBLExtension>
    </ext:UBLExtensions>
    <cbc:ProfileID>reporting:1.0</cbc:ProfileID>
    <cbc:ID>753</cbc:ID>
    <cbc:UUID>e1d4aee7-3143-464d-bb1c-9765b220</cbc:UUID>
    <cbc:IssueDate>2024-02-20</cbc:IssueDate>
    <cbc:IssueTime>14:42:00</cbc:IssueTime>
    <cbc:InvoiceTypeCode name="0100000">383</cbc:InvoiceTypeCode>
    <cbc:DocumentCurrencyCode>SAR</cbc:DocumentCurrencyCode>
    <cbc:TaxCurrencyCode>SAR</cbc:TaxCurrencyCode>
    <cac:BillingReference>
        <cac:InvoiceDocumentReference>
            <cbc:ID>141</cbc:ID>
        </cac:InvoiceDocumentReference>
    </cac:BillingReference>
    <cac:AdditionalDocumentReference>
        <cbc:ID>ICV</cbc:ID>
        <cbc:UUID>514758</cbc:UUID>
    </cac:AdditionalDocumentReference>
    <cac:AdditionalDocumentReference>
        <cbc:ID>PIH</cbc:ID>
        <cac:Attachment>
            <cbc:EmbeddedDocumentBinaryObject mimeCode="text/plain">NWZlY2ViNjZmZmM4NmYzOGQ5NTI3ODZjNmQ2OTZjNzljMmRiYzIzOWRkNGU5MWI0NjcyOWQ3M2EyN2ZiNTdlOQ==</cbc:EmbeddedDocumentBinaryObject>
        </cac:Attachment>
    </cac:AdditionalDocumentReference>
    <cac:AdditionalDocumentReference>
        <cbc:ID>QR</cbc:ID>
        <cac:Attachment>
            <cbc:EmbeddedDocumentBinaryObject mimeCode="text/plain">AQtOb29yIFRyYXZlbAIPMzAwNDY0NTc4OTAwMDAzAxMyMDI0LTAyLTIwVDE0OjQyOjAwBAgxMTUwMC4wMAUHMTUwMC4wMAYsL3lKUXhnQSt5bUtXYk9sYkREQVdLaHlRbnpjOTVFS2NBV3ZUNlFqNUlhTT0HYE1FWUNJUURrT1AzcjEyUTdwWUJDb2Z2RnM3VDh2eTVYcy9DcG5DTyt4K0M1clZPVjZRSWhBS2NiK3VVcDRSa1kwclFpNGdDRXM0TUZVTU83MGQwbENWMTRneW5Za1JhVghYMFYwEAYHKoZIzj0CAQYFK4EEAAoDQgAE03LVZW5PUPVF99KjcbZgITm3RppsWgmGjTgiiAIfbPYIVSc0itWMn7XE6Tu9vYrOFWXHgYbx9cKqowTvMJHrGQ==</cbc:EmbeddedDocumentBinaryObject>
        </cac:Attachment>
    </cac:AdditionalDocumentReference>
    <cac:Signature>
        <cbc:ID>urn:oasis:names:specification:ubl:signature:Invoice</cbc:ID>
        <cbc:SignatureMethod>urn:oasis:names:specification:ubl:dsig:enveloped:xades</cbc:SignatureMethod>
    </cac:Signature>
    <cac:AccountingSupplierParty>
        <cac:Party>
            <cac:PartyIdentification>
                <cbc:ID schemeID="CRN">2051015377</cbc:ID>
            </cac:PartyIdentification>
            <cac:PostalAddress>
                <cbc:StreetName>14TH Street</cbc:StreetName>
                <cbc:AdditionalStreetName>-</cbc:AdditionalStreetName>
                <cbc:BuildingNumber>3341</cbc:BuildingNumber>
                <cbc:PlotIdentification>3341</cbc:PlotIdentification>
                <cbc:CitySubdivisionName>dammam</cbc:CitySubdivisionName>
                <cbc:CityName>dammam</cbc:CityName>
                <cbc:PostalZone>34327</cbc:PostalZone>
                <cbc:CountrySubentity>0</cbc:CountrySubentity>
                <cac:Country>
                    <cbc:IdentificationCode>SA</cbc:IdentificationCode>
                </cac:Country>
            </cac:PostalAddress>
            <cac:PartyTaxScheme>
                <cbc:CompanyID>300464578900003</cbc:CompanyID>
                <cac:TaxScheme>
                    <cbc:ID>VAT</cbc:ID>
                </cac:TaxScheme>
            </cac:PartyTaxScheme>
            <cac:PartyLegalEntity>
                <cbc:RegistrationName>Noor Travel</cbc:RegistrationName>
            </cac:PartyLegalEntity>
        </cac:Party>
    </cac:AccountingSupplierParty>
    <cac:AccountingCustomerParty>
        <cac:Party>
            <cac:PartyIdentification>
                <cbc:ID schemeID="CRN">1010060332</cbc:ID>
            </cac:PartyIdentification>
            <cac:PostalAddress>
                <cbc:StreetName>sample street</cbc:StreetName>
                <cbc:AdditionalStreetName>-</cbc:AdditionalStreetName>
                <cbc:BuildingNumber>4545</cbc:BuildingNumber>
                <cbc:PlotIdentification>4545</cbc:PlotIdentification>
                <cbc:CitySubdivisionName>-</cbc:CitySubdivisionName>
                <cbc:CityName>Riyadh</cbc:CityName>
                <cbc:PostalZone>45612</cbc:PostalZone>
                <cbc:CountrySubentity>0</cbc:CountrySubentity>
                <cac:Country>
                    <cbc:IdentificationCode>SA</cbc:IdentificationCode>
                </cac:Country>
            </cac:PostalAddress>
            <cac:PartyTaxScheme>
                <cbc:CompanyID>311111111011113</cbc:CompanyID>
                <cac:TaxScheme>
                    <cbc:ID>VAT</cbc:ID>
                </cac:TaxScheme>
            </cac:PartyTaxScheme>
            <cac:PartyLegalEntity>
                <cbc:RegistrationName>test company pvt ltd</cbc:RegistrationName>
            </cac:PartyLegalEntity>
        </cac:Party>
    </cac:AccountingCustomerParty>
    <cac:Delivery>
        <cbc:ActualDeliveryDate>2024-02-20</cbc:ActualDeliveryDate>
        <cbc:LatestDeliveryDate>2024-02-20</cbc:LatestDeliveryDate>
    </cac:Delivery>
    <cac:PaymentMeans>
        <cbc:PaymentMeansCode>2</cbc:PaymentMeansCode>
        <cbc:InstructionNote>-</cbc:InstructionNote>
    </cac:PaymentMeans>
    <cac:TaxTotal>
        <cbc:TaxAmount currencyID="SAR">1500.00</cbc:TaxAmount>
    </cac:TaxTotal>
    <cac:TaxTotal>
        <cbc:TaxAmount currencyID="SAR">1500.00</cbc:TaxAmount>
        <cac:TaxSubtotal>
            <cbc:TaxableAmount currencyID="SAR">10000.00</cbc:TaxableAmount>
            <cbc:TaxAmount currencyID="SAR">1500.00</cbc:TaxAmount>
            <cac:TaxCategory>
                <cbc:ID schemeID="UN/ECE 5305">S</cbc:ID>
                <cbc:Percent>15</cbc:Percent>
                <cac:TaxScheme>
                    <cbc:ID schemeID="UN/ECE 5153">VAT</cbc:ID>
                </cac:TaxScheme>
            </cac:TaxCategory>
        </cac:TaxSubtotal>
    </cac:TaxTotal>
    <cac:LegalMonetaryTotal>
        <cbc:LineExtensionAmount currencyID="SAR">10000.00</cbc:LineExtensionAmount>
        <cbc:TaxExclusiveAmount currencyID="SAR">10000.00</cbc:TaxExclusiveAmount>
        <cbc:TaxInclusiveAmount currencyID="SAR">11500.00</cbc:TaxInclusiveAmount>
        <cbc:AllowanceTotalAmount currencyID="SAR">0.00</cbc:AllowanceTotalAmount>
        <cbc:ChargeTotalAmount currencyID="SAR">0.00</cbc:ChargeTotalAmount>
        <cbc:PrepaidAmount currencyID="SAR">0.00</cbc:PrepaidAmount>
        <cbc:PayableAmount currencyID="SAR">11500.00</cbc:PayableAmount>
    </cac:LegalMonetaryTotal>
    <cac:InvoiceLine>
        <cbc:ID>1</cbc:ID>
        <cbc:InvoicedQuantity unitCode="PCS">100</cbc:InvoicedQuantity>
        <cbc:LineExtensionAmount currencyID="SAR">10000.00</cbc:LineExtensionAmount>
        <cac:TaxTotal>
            <cbc:TaxAmount currencyID="SAR">1500.00</cbc:TaxAmount>
            <cbc:RoundingAmount currencyID="SAR">11500.00</cbc:RoundingAmount>
        </cac:TaxTotal>
        <cac:Item>
            <cbc:Name>Automated clearing house credit</cbc:Name>
            <cac:ClassifiedTaxCategory>
                <cbc:ID>S</cbc:ID>
                <cbc:Percent>15</cbc:Percent>
                <cac:TaxScheme>
                    <cbc:ID>VAT</cbc:ID>
                </cac:TaxScheme>
            </cac:ClassifiedTaxCategory>
        </cac:Item>
        <cac:Price>
            <cbc:PriceAmount currencyID="SAR">100.00</cbc:PriceAmount>
        </cac:Price>
    </cac:InvoiceLine>
</Invoice>
