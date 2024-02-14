# Import class file
from DPR import DPR, hapus_anggota, tambah_anggota, tampilkan_daftar_anggota, ubah_anggota

# Instantiation array
anggota_dpr_list = [
    DPR("01", "H. IRMAWAN, S.Sos, M.M.", "Komisi I", "PKB"),
    DPR("02", "ZURISTYO FIRMADATA, S.E., M.M.", "Komisi II", "Nasdem"),
    DPR("03", "ZULKIFLI HASAN, SE., M.M.", "Komisi II", "PAN")
]

# Output
while True:
    tampilkan_daftar_anggota(anggota_dpr_list)
    print("\nMenu:")
    print("1. Tambah Anggota DPR")
    print("2. Ubah Anggota DPR")
    print("3. Hapus Anggota DPR")
    print("0. Keluar")

    pilihan = input("Masukan Pilihan : ")

    if pilihan == "1":
        tambah_anggota(anggota_dpr_list)
    elif pilihan == "2":
        ubah_anggota(anggota_dpr_list)
    elif pilihan == "3":
        hapus_anggota(anggota_dpr_list)
    elif pilihan == "0":
        print("Terima Kasih")
        break
    else:
        print("Pilihan tidak valid.")
