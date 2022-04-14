@extends('layouts.layout')
@section('title')
	@yield('title', 'PROFILE')
@endsection

@section('content')
    <div class="wrapper bgwhite">
		<h2 class="border-bottom pb-4" style="font-weight: bold">Hồ Sơ</h2>
        <div class="d-flex align-items-start py-3 border-bottom">
            <img class = "image" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAPQAAADOCAMAAAA+EN8HAAAAY1BMVEX39/d/e3X8/Px6dnD9/f2ysK2urKh3c2y0sq95dW51cGn29vby8vKAfHbq6el0b2jPzsyhnprIx8Xf3t2opqLV1NLY19bAvrySj4qMiYOal5Pt7OzEwsCjoZ2FgnyNioRsZ1/Vu99wAAAGZUlEQVR4nO2dWXfqOgyFE9lgMjQEwhxK7///lTcp0IFTCo63iTfN93BW+3BWs5c8yLIkR9HAwMDAwMDAwMDAX0B0UZ9/bNC6+afXD/KK6CiL8mK+m7W/iK6rcj9ZzGav433+pLJ1MT4opRKTTrSO6nLxYkyijiTJ/hmtLfkiVfGRw2ZzSJPzb0fMZiU67/srsUh5IfJfjNrOn8fazcCVcnpDcmP/ZTPqnwOdr8plXd0y87up3+aZfgJbS/7arFbm5tA+kahZSa9bKnWn3DPKpLNlxCxbisRO8kn3yyTjlZ13kHzUnZSsa5psLMf2FxoHpu/P74TMumuO4ynlnp0vukzoT0zRt4IO6LmLoZt5/cZnaqmMk+bG1Hs61dmLo+bG1lnfIizRTqvYkWTCZWopU2fNfKYGSG5MvWYytazdtqszh76FWOG+ir1jSh5Ty8p1uzqhdjzOqIzdl+4jKU/UTL+BNMdmSTO+NWh0N+ObaKu+HQW8VzTPpM4QnsmRA42lBSda0axkGrRNN5j69p8LA33Aia76FnMvSNGrvsXcC26fJtqo9Q7lkcUJjfctr39R9Ogvil7/RdFzTAwhZlrIkKJptqyohrlkPM4JIuh9IuW53MGJTmh8b1hgsIEn9C0w55vnPB3pDUgzUeQkkgXIO1FjHkvDXDJFdLEjJSgealY8oqMCFCVLiXasKAKJfiEyNGrPUjOexTuvQLGTZJ6xuKEy+m8+wYhexVMSW8urUhjv5LCNpyR+KMwfa2E5ZuE875jnQI07WMY8QbIcFhZsRZPkDda4S0se7xvlgx5Fk+QiOKfCfhM94hD9Jy2dw6LeMc9CFkH3aZJoPyLt+YMpSdIJ8FYnjjckB44ox61kNFM60rhLeZ6UqqhCmVqNWUY3MOmEKjBYYLJD1YjH0I2pQVccJGGTEzVi1+IqXAGZmq1ECbGAqwXTjG4R95gR1UXWO4jilb412OMcSuAb3W0g2NHUU5Lg7zeqg4utDUvI5ALJuud9JyvWZicOp62E53R1gcMKTueXfOCSb0M6uJ3iRge+7eqEQ0kxTWjsX4quotUr7fCOpKuh2Q6VX+m8fLPkH/xIx1iCWvAaujH1vtuspt2l39FdepKlNCU6V+jQcY8pT/Bn9MRaNU/N9FWsb6uZbjWuYX3UShmDBxdIaWlqroZFV7DMsOJfxloyO0OztV77GctUUZ5r+N+QrZ1oyoahl/xJ0ZYZVizJoL+T2W1ZpPHuCyyzJp9hyxJt7ZyQt3IXKZZz26QbtS6rnFj4JDZ39+v/ojox7ascfX98N7Jt98QTNV1TTm3HvNgpo61l5Zh1QtQZ4ANx7c9l+FwzQJdYPlMD0kOZOgEfQVSvvJEt4JCMwbRiMrVoy3DJz6gdjWfWKF6CkoBVutvXwesWkXo+iw2unCExb5NKwhUuOl9NtlN7Z/sGSapm8yLAdyBFstVko3Am/k5j8MOirAMSLjqq1rvmPOVH8Kfw9DBeBrG0NWP6fRJ7MvGlcJNs1kXP9pao3HU4MbsJT7frvD+3RbI1cKG2IDGLoh/ZIvvY8zS+jjLjPp631dUWWRFvL1vNH2/sMbIevhNmUz/U2FIcehvZnyjzyEcR9TIAyS3p4+oS9br3oX3GzB40wgPS3Oxeu4eoDkpze+h+gGpZBqW5GeEPSMHqnMPtjdR7rFi2ffidv+P7sdMOWY/+URu/pg5vcLf4vQyBNqsB4rWMC9bLA4zPmg/g+zFo/Jk6zBnd4i/PEPh8DBxvJXsSrmZvWeKyDHZ0+2t0D2w+5YEXL5pB7yv7wlP/XGhrTDh+ckolRLf7C1sf6ze0g7UH/LRgDNQFPePlPbGwp7Sfihfgw3Z+8PEOT9i7dIuHndqy/qQHPBSmQvuze8HDSgZtYO0FfJ2PdZ3o48F3Ugh+8Y49dISBPXbmEYUWHboT2pKiA2XAd+K9Ab/pkOAXbw+t7qEvingCXpAb+nGjBb1RBx0UPIMODkIfH/AFuiCXwTeBeychX258sgUP7+BP0y3gvjAB31d+AfyABYMX2ngnWNHhx01a0K0JkS8jeQN8tQOpqPMO2PmGPvzlDXCUDPgwkkfAj2CGHxZsAR+zGA5Z8GMWh2jwdZZ7h4NHgH0Ek+I4jT5QSzlVBBhsuH+1GN9mdJvJFe74r6PbH7AA5w0KB1DNAwMDAwMDAwMD3vgfWQN22djTNTYAAAAASUVORK5CYII=" alt=""> 
            <div class="pl-sm-4 pl-2 p-4" id="image-section">
                <p>Ảnh Đại Diện</p>
                <label class="form-label" for="customFile">Tải Ảnh Lên</label>
                <input type="file" class="form-control" id="customFile"/>
                <button class="btn btn-primary btn-block m-1">Upload</button>
            </div>
        </div>
        <div class="py-2">
            <div class="d-flex flex-column mb-1">
                <label for="fullname">Họ Và Tên</label>
                <input type = "text" class="form-control" placeholder="Họ Và Tên"></input>
                <label for="gender">Giới Tính</label>
                <div class="d-flex flex-row mb-1">
                    <select name = "Giới Tính">
                        <option value="none" selected>Giới Tính</option>
                        <option value="Name">Nam</option>
                        <option value = "Nữ">Nữ</optin>
                        <option value="Khác">Khác</option>
                    </select>
                </div>
                <label for="height">Chiều Cao</label>
                <input type="text" class="form-control" placeholder="..."></input>
                <label for="height">Cân Nặng</label>
                <input type="text" class="form-control" placeholder="..."></input>
                <label for="">Bạn năm nay bao nhiêu tuổi?</label>
                <input type = "text" class="form-control" placeholder="..."></input>
                <label for= "">Giới Thiệu Về Bản Thân</label>
                <input type="text" class="form-control" placeholder="..."></input>
            </div>
        </div>
    </div>
@endsection