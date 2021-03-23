<h2>Esempio chiamata</h2>
<script>
    
    var Fida = {
        ambiente: "dev",

        apiKey: {
            "dev": "eyJ4NXQiOiJOVGRtWmpNNFpEazNOalkwWXpjNU1tWm1PRGd3TVRFM01XWXdOREU1TVdSbFpEZzROemM0WkE9PSIsImtpZCI6ImdhdGV3YXlfY2VydGlmaWNhdGVfYWxpYXMiLCJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJzdWIiOiJhZG1pbkBjYXJib24uc3VwZXIiLCJhcHBsaWNhdGlvbiI6eyJvd25lciI6ImFkbWluIiwidGllclF1b3RhVHlwZSI6bnVsbCwidGllciI6IjUwUGVyTWluIiwibmFtZSI6IldlYmFuay1BcHAiLCJpZCI6MywidXVpZCI6Ijk1ZGUwMjA0LWM5NTAtNGQ5ZC04NjM3LWYxODVhN2JkYjgxMSJ9LCJpc3MiOiJodHRwczpcL1wvbG9jYWxob3N0Ojk0NDNcL29hdXRoMlwvdG9rZW4iLCJ0aWVySW5mbyI6eyJCcm9uemUiOnsidGllclF1b3RhVHlwZSI6InJlcXVlc3RDb3VudCIsImdyYXBoUUxNYXhDb21wbGV4aXR5IjowLCJncmFwaFFMTWF4RGVwdGgiOjAsInN0b3BPblF1b3RhUmVhY2giOnRydWUsInNwaWtlQXJyZXN0TGltaXQiOjAsInNwaWtlQXJyZXN0VW5pdCI6bnVsbH19LCJrZXl0eXBlIjoiU0FOREJPWCIsInBlcm1pdHRlZFJlZmVyZXIiOiIiLCJzdWJzY3JpYmVkQVBJcyI6W3sic3Vic2NyaWJlclRlbmFudERvbWFpbiI6ImNhcmJvbi5zdXBlciIsIm5hbWUiOiJXZUJhbmstTW9kZWxQb3J0Zm9saW8iLCJjb250ZXh0IjoiXC93ZWJhbmsiLCJwdWJsaXNoZXIiOiJhZG1pbiIsInZlcnNpb24iOiIxLjAuMCIsInN1YnNjcmlwdGlvblRpZXIiOiJCcm9uemUifV0sInBlcm1pdHRlZElQIjoiIiwiaWF0IjoxNjAyMDk5ODUyLCJqdGkiOiIyNDIxMjdkZS00ZWZmLTQ3NDMtOGM2Ni0xZTNjMjI1YzM1MDAifQ==.KH_6h0QLHrjttPYfYNCNPqYHEUwpQMfsTLXC14kGBMWmqQYdvwzP6tj4Q8lXExWl12aozkc-tNgUYnCgrseL6XOAhuRgyuwbwWEy4seFWneGeighI2MQzhH6e8eI6F4NEQO9_cPLx2ROC_xyqtEUD29991NKXMKWceIqXBM5AGJnwSGKuH3P9VNadzloxzmBVaKME8C_K8vJT3zLPkdNb0lm18BxLCaGOFI7UMCa4n3J_AqREd_17zGpk2gfc9vM7U1mMsMTn5pr2Pppe95O_4Eaacssjt23AWixlqdvQkBmMrtGWI6TW0HrUGJgrlQEWjJKvCBGXY2bDcSCnqw==",
            "prod": "eyJ4NXQiOiJOVGRtWmpNNFpEazNOalkwWXpjNU1tWm1PRGd3TVRFM01XWXdOREU1TVdSbFpEZzROemM0WkE9PSIsImtpZCI6ImdhdGV3YXlfY2VydGlmaWNhdGVfYWxpYXMiLCJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJzdWIiOiJhZG1pbkBjYXJib24uc3VwZXIiLCJhcHBsaWNhdGlvbiI6eyJvd25lciI6ImFkbWluIiwidGllclF1b3RhVHlwZSI6bnVsbCwidGllciI6IjUwUGVyTWluIiwibmFtZSI6IldlYmFuay1BcHAiLCJpZCI6MywidXVpZCI6Ijk1ZGUwMjA0LWM5NTAtNGQ5ZC04NjM3LWYxODVhN2JkYjgxMSJ9LCJpc3MiOiJodHRwczpcL1wvbG9jYWxob3N0Ojk0NDNcL29hdXRoMlwvdG9rZW4iLCJ0aWVySW5mbyI6eyJCcm9uemUiOnsidGllclF1b3RhVHlwZSI6InJlcXVlc3RDb3VudCIsImdyYXBoUUxNYXhDb21wbGV4aXR5IjowLCJncmFwaFFMTWF4RGVwdGgiOjAsInN0b3BPblF1b3RhUmVhY2giOnRydWUsInNwaWtlQXJyZXN0TGltaXQiOjAsInNwaWtlQXJyZXN0VW5pdCI6bnVsbH19LCJrZXl0eXBlIjoiUFJPRFVDVElPTiIsInBlcm1pdHRlZFJlZmVyZXIiOiIiLCJzdWJzY3JpYmVkQVBJcyI6W3sic3Vic2NyaWJlclRlbmFudERvbWFpbiI6ImNhcmJvbi5zdXBlciIsIm5hbWUiOiJXZUJhbmstTW9kZWxQb3J0Zm9saW8iLCJjb250ZXh0IjoiXC93ZWJhbmsiLCJwdWJsaXNoZXIiOiJhZG1pbiIsInZlcnNpb24iOiIxLjAuMCIsInN1YnNjcmlwdGlvblRpZXIiOiJCcm9uemUifV0sInBlcm1pdHRlZElQIjoiIiwiaWF0IjoxNjAyMTAxMDU1LCJqdGkiOiJjY2Q5NzUzOS0xNzU0LTRhMWItOTMzOC1hZGM5ZjBmNTBiMzcifQ==.wt94kHl4JfteAYAZWhCujXc9IUtlmlxJrhUV4iJp9_Y8aNffkTrTxea-Vs38XqchkpZbsA_f2pMC7hWm3CvvphaTGTN5cX1Ic9X9BP2EcFEUW46LQCS4PukJQRxQvbu67yCf7Tnqsx7qVUPHLj-TJRzbJ692g2tojfqBOmmi39O0M_EINSAuO0HkBMip8ijvpdhaZvprvAakiGFq8GupeliP5rlg8A0sooYE1g7UNp0rBjDmkKWO1Ocb3wDo34DneOAvg5vFNwKyruGAs3bb6_ZIZtxq_dLah9THe8IGU7_Sb09YUbWJVZGhAcStrb8fxEvshKWsq0orbH6Yjg=="
        },

        apiUrl: {
            "dev": "http://apim.fidainformatica.it/webank",
            "prod": "https://apim.fidainformatica.it/webank"
        }

        
    }  
    
$(function(){

    // Esempio destinazione della chiamata (elenco dei portafogli modello)
    var destUrl = "/api/modelportfolios/bpm/OverviewPorfolios";

    $.ajax({
        dataType: "json",
        url: Fida.apiUrl[Fida.ambiente] + destUrl,
        headers: {
           apikey: Fida.apiKey[Fida.ambiente]
        },
        success: function(data){
            console.log(data)
        }
    })
});

</script>